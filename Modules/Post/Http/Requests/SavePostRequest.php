<?php

namespace Modules\Post\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Core\Http\Requests\Request;
use Modules\Post\Entities\Post;

class SavePostRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'post::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => 'nullable',
            'title' => 'required|max:160',
            'short_description' => 'required|max:160',
            'body' => 'required',
            'is_active' => 'required|boolean',
        ];
    }

    private function getSlugRules()
    {
        $rules = $this->route()->getName() === 'admin.posts.update'
            ? ['required']
            : ['sometimes'];

        $slug = Post::withoutGlobalScope('active')->where('id', $this->id)->value('slug');

        $rules[] = Rule::unique('posts', 'slug')->ignore($slug, 'slug');

        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'Tiêu đề',
            'short_description' => 'Mô tả ngắn',
            'body' => 'Nội dung',
            'is_active' => 'Trạng thái',
        ];
    }
}
