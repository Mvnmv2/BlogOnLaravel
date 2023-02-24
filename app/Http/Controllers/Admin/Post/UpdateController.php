<?php

    namespace App\Http\Controllers\Admin\Post;

    use App\Http\Requests\Admin\Post\UpdateRequest;
    use App\Models\Post;

    class UpdateController extends BaseController {
        public function __invoke(UpdateRequest $request, Post $post) {

            $data = $request->validated();
            $post = $this->servise->update($data, $post);


            return view('admin.post.show', compact('post'));
        }

        public function messages() {
            return [
                'title.required'=>'Это поле необходимо для заполнения',
                'title.string'=>'Данные должны соответствовать сточному типу',
                'content.required'=>'Это поле необходимо для заполнения',
                'content.string'=>'Данные должны соответствовать сточному типу',
                'preview_image.required'=>'Это поле необходимо для заполнения',
                'preview_image.file'=>'Необходимо выбрать файл',
                'main_image.required'=>'Это поле необходимо для заполнения',
                'main_image.file'=>'Необходимо выбрать файл',
                'category_id.required'=>'Это поле необходимо для заполнения',
                'category_id.integer'=>'Id категории должен быть числом',
                'category_id.exists'=>'Id категории должен быть в базе данных',
                'tag_ids.array'=>'Необходимо отправить массив данных',
            ];
        }
    }
