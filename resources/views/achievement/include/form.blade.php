<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('Title') }}" value="{{ old('title', $achievement->title ?? '') }}" required>
            @error('title')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="short_description">{{ __('Short Description') }}</label>
            <textarea name="short_description" id="short_description" class="form-control @error('short_description') is-invalid @enderror" placeholder="{{ __('short_Description') }}" required>{{ old('short_description', $achievement->short_description ?? '') }}</textarea>
            @error('short_description')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">{{ __('Description') }}</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="{{ __('Description') }}" required>{{ old('description', $achievement->description ?? '') }}</textarea>
            @error('description')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">{{ __('Image') }}</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="{{ __('Image') }}" value="{{ old('image', $achievement->image ?? '') }}" required>
            @error('image')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="file">{{ __('File') }}</label>
            <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror" placeholder="{{ __('File') }}" value="{{ old('file', $achievement->file ?? '') }}" required>
            @error('file')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="external_link">{{ __('External Link') }}</label>
            <input type="text" name="external_link" id="external_link" class="form-control @error('external_link') is-invalid @enderror" placeholder="{{ __('External Link') }}" value="{{ old('external_link', $achievement->external_link ?? '') }}" required>
            @error('external_link')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>
