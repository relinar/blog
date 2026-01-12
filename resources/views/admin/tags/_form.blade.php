<div class="form-control w-full">
    <label class="label"><span class="label-text">Name</span></label>
    <input type="text" name="name" value="{{ old('name', $tag->name ?? '') }}" class="input input-bordered w-full" />
    @error('name')<p class="text-error">{{ $message }}</p>@enderror
</div>
