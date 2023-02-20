<?php

    namespace App\Http\Controllers\Admin\Tag;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Admin\Tag\StoreRequest;
    use App\Models\Tag;

    class StoreController extends Controller {
        public function __invoke(StoreRequest $request) {
            $data = $request->validated();
            //Если проверяющий массив идентичен создающему можно написать вот так:
            //Category::firstOrCreate(['title' => $data['title']]);
            //Супер сокращенная запись
            Tag::firstOrCreate($data);

            return redirect()->route('admin.tag.index');
        }
    }
