@if ($entity->exists ?? false)
    {{ Form::text('slug', trans('page::attributes.slug'), $errors, $entity, ['required' => true]) }}
@endif

<div class="form-group">
    <label for="meta-title" class="col-md-3 control-label text-left">
        {{ trans('meta::attributes.meta_title') }}
    </label>

    <div class="col-md-9">
        <input type="text"
            name="meta[meta_title]"
            class="form-control"
            id="meta-title"
            value="{{ old("meta.meta_title", optional($entity->meta ?? null)->translate(locale())->meta_title ?? '') }}"
        >
    </div>
</div>

<div class="form-group">
    <label for="meta-keywords" class="col-md-3 control-label text-left">
        {{ trans('meta::attributes.meta_keywords') }}
    </label>

    <div class="col-md-9">
        <select name="meta[meta_keywords][]" class="form-control selectize" id="meta-keywords" multiple>
            @foreach (old("meta.meta_keywords", optional($entity->meta ?? null)->translate(locale())->meta_keywords ?? []) as $keyword)
                <option value="{{ $keyword }}" selected>{{ $keyword }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label for="meta-description" class="col-md-3 control-label text-left">
        {{ trans('meta::attributes.meta_description') }}
    </label>

    <div class="col-md-9">
        <textarea name="meta[meta_description]"
            class="form-control"
            id="meta-description"
            rows="10"
            cols="10"
        >{{ old("meta.meta_description", optional($entity->meta ?? null)->translate(locale())->meta_description ?? '') }}</textarea>
    </div>
</div>
