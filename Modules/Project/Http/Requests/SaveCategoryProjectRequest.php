<?php

namespace Modules\Project\Http\Requests;

use Modules\Core\Http\Requests\Request;

class SaveCategoryProjectRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'project::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
