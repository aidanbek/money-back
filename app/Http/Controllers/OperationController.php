<?php

namespace App\Http\Controllers;

use App\DataObjects\OperationCreate;
use App\Enums\CategoryTypeEnum;
use App\Enums\OperationTypeEnum;
use App\Helpers\StringHelper;
use App\Http\Requests\OperationCreateRequest;
use App\Models\Account;
use App\Models\AccountType;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MeasureUnit;
use App\Models\OperationProduct;
use App\Models\Payee;
use App\Models\Product;
use App\Models\Operation;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OperationController extends Controller
{
    public function create(OperationCreateRequest $request)
    {
        $dto = OperationCreate::from($request->validated());

        DB::transaction(function () use ($dto) {
            $account = Account::updateOrCreate(
                [
                    'clean_title' => StringHelper::clearTitle($dto->account->title),
                ],
                [
                    'title' => $dto->account->title,
                    'type_id' => 1
                ]
            );

            $payee = Payee::updateOrCreate(
                [
                    'title' => $dto->payee->title
                ],
                [
                    'clean_title' => StringHelper::clearTitle($dto->payee->title),
                ]
            );

            $operation = Operation::create([
                'id' => Str::uuid()->toString(),
                'account_id' => $account->id,
                'payee_id' => $payee->id,
                'type' => OperationTypeEnum::EXPENSE->value,
                'online' => $dto->online,
                'total' => 0,
                'happened_at' => $dto->happenedAt,
            ]);

            $total = 0;

            foreach ($dto->products as $item) {
                $brand = Brand::updateOrCreate(
                    [
                        'clean_title' => StringHelper::clearTitle($item->product->brand->title),
                    ],
                    [
                        'title' => $item->product->brand->title,
                    ]
                );

                $measureUnit = MeasureUnit::updateOrCreate(
                    [
                        'title' => $item->product->measureUnit->title
                    ],
                    [
                        'clean_title' => StringHelper::clearTitle($item->product->measureUnit->title),
                    ]
                );

                $product = Product::updateOrCreate(
                    [
                        'clean_title' => StringHelper::clearTitle($item->product->title),
                        'code' => $item->product->code,
                        'brand_id' => $brand->id,
                        'measure_unit_id' => $measureUnit->id,
                    ],
                    [
                        'title' => $item->product->title,
                    ]
                );

                $category = Category::updateOrCreate(
                    [
                        'clean_title' => StringHelper::clearTitle($item->category->title),
                    ],
                    [
                        'title' => $item->category->title,
                        'type' => CategoryTypeEnum::EXPENSE,
                        'sort_order' => 0,
                    ]
                );

                $project = null;

                if ($item->project !== null) {
                    $project = Project::updateOrCreate(
                        [
                            'clean_title' => StringHelper::clearTitle($item->project->title),
                        ],
                        [
                            'title' => $item->project->title,
                        ]
                    );
                }

                OperationProduct::create([
                    'operation_id' => $operation->id,
                    'product_id' => $product->id,
                    'category_id' => $category->id,
                    'project_id' => $project?->id,
                    'quantity' => $item->quantity,
                    'price' => $item->price,
                ]);

                $total += $item->quantity * $item->price;
            }

            $operation->total = $total;
            $operation->save();
        });
    }
}
