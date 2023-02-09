<x-admin.wrapper>
    <x-slot name="title">
        <div class="flex justify-between items-center">
            <h2 class="inline-block text-2xl sm:text-3xl  text-slate-900   block sm:inline-block flex">
                {{ __('Create client') }}
            </h2>
        </div>
    </x-slot>


    <div class="w-full py-2 bg-white overflow-hidden">

        <form method="POST" action="{{ route('client.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="py-2">

                <x-admin.form.image id="image" class="{{$errors->has('image') ? 'border-red-400' : ''}} w-[50%]"
                                    name="image"
                                    accept="image/*"

                                    value="{{ old('image') }}"
                />
            </div>

            <div class="py-2">

                <x-admin.form.label for="first_name"
                                    class="{{$errors->has('first_name') ? 'text-red-400' : ''}}">{{ __('first_name') }}</x-admin.form.label>

                <x-admin.form.input id="first_name"
                                    class="{{$errors->has('first_name') ? 'border-red-400' : ''}} w-[50%]"
                                    type="text"
                                    name="first_name"
                                    errors="{{$errors??''}}"
                                    value="{{ old('first_name') }}">
                </x-admin.form.input>
                <x-admin.form.error-field name="first_name"/>


            </div>


            <div class="py-2">
                <x-admin.form.label for="last_name"
                                    class="{{$errors->has('last_name') ? 'text-red-400' : ''}}">{{ __('last_name') }}</x-admin.form.label>

                <x-admin.form.input id="last_name" class="{{$errors->has('last_name') ? 'border-red-400' : ''}} w-[50%]"
                                    type="text"
                                    name="last_name"
                                    value="{{ old('last_name') }}"></x-admin.form.input>
                <x-admin.form.error-field name="last_name"/>
            </div>

            <div class="py-2">
                <x-admin.form.label for="email"
                                    class="{{$errors->has('email') ? 'text-red-400' : ''}}">{{ __('Email') }}</x-admin.form.label>

                <x-admin.form.input id="email" class="{{$errors->has('email') ? 'border-red-400' : ''}} w-[50%]"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                />
                <x-admin.form.error-field name="email"/>
            </div>

            <div class="py-2">
                <x-admin.form.label for="phone"
                                    class="{{$errors->has('phone') ? 'text-red-400' : ''}}">{{ __('phone') }}</x-admin.form.label>

                <x-admin.form.input id="phone" class="{{$errors->has('phone') ? 'border-red-400' : ''}} w-[50%]"
                                    type="text"
                                    name="phone"
                                    value="{{ old('phone') }}"
                />
                <x-admin.form.error-field name="phone"/>
            </div>

            <div class="py-2">
                <x-admin.form.label for="password"
                                    class="{{$errors->has('password') ? 'text-red-400' : ''}}">{{ __('Password') }}</x-admin.form.label>

                <x-admin.form.input id="password" class="{{$errors->has('password') ? 'border-red-400' : ''}} w-[50%]"
                                    type="password"
                                    name="password"
                />
                <x-admin.form.error-field name="password"/>

            </div>

            <div class="py-2">
                <x-admin.form.label for="password_confirmation"
                                    class="block font-medium text-sm text-gray-700{{$errors->has('password') ? 'text-red-400' : ''}}">{{ __('Password Confirmation') }}</x-admin.form.label>

                <x-admin.form.input id="password_confirmation"
                                    class="{{$errors->has('password') ? 'border-red-400' : ''}} w-[50%]"
                                    type="password"
                                    name="password_confirmation"
                />

                <x-admin.form.error-field name="password_confirmation"/>

            </div>

            <div class="py-2">
                <x-admin.form.label for="company_id"
                                    class="block font-medium text-sm text-gray-700{{$errors->has('company_id') ? 'text-red-400' : ''}}">{{ __('company_id') }}</x-admin.form.label>

                <x-admin.form.select id="company_id"
                                     class="{{$errors->has('company_id') ? 'border-red-400' : ''}} w-[50%]"
                                     type="text"
                                     name="company_id"
                >
                    <option value="">---</option>
                    @foreach($companies as $companie)
                        <option value="{{$companie->id}}">{{$companie->name}}</option>
                    @endforeach
                </x-admin.form.select>
                <x-admin.form.error-field name="company_id"/>



            </div>

            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Create') }}</x-admin.form.button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            imgInp.onchange = evt => {
                const [file] = imgInp.files
                if (file) {
                    blah.src = URL.createObjectURL(file)
                }
            }
        </script>
    @endpush
</x-admin.wrapper>
