<?php

    namespace App\Http\Controllers\Admin\Category;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Category\StoreRequest;
    use App\Models\Category;

    class StoreController extends Controller {
        public function __invoke(StoreRequest $request) {
            $data = $request->validated();
            //Если проверяющий массив идентичен создающему можно написать вот так:
            //Category::firstOrCreate(['title' => $data['title']]);
            //Супер сокращенная запись
            Category::firstOrCreate($data);

            return redirect()->route('admin.category.index');
        }
    }
