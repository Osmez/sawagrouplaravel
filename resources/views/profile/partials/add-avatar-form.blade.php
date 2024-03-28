<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{__('website.changephoto')}}
        </h2>
    </header>

    <form method="post" enctype="multipart/form-data" action="{{route('profile.updateavatar')}}"  class="mt-6 space-y-6">
        @csrf
        @method('post')

        <div>
            <x-input-label for="update_avatar" value="Add Image" />
            <x-text-input id="update_avatar" name="update_avatar" type="file" class="mt-1 block w-full"  />
            @error('update_avatar')@enderror
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('website.save') }}</x-primary-button>
        </div>
        
    </form>
</section>