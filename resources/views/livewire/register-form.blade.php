<div>
    <form wire:submit.prevent="save" id="registerform" class="register-form">
        @csrf

        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control" wire:model="first_name" id="floatingInput" placeholder="first name">
                    <label for="floatingInput">First Name</label>
                    @error('fist_name') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="last_name" class="form-control" wire:model="last_name" id="floatingInput" placeholder="last name">
                    <label for="floatingInput">Last Name</label>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" wire:model="email" id="floatingInput" placeholder="email">
                    <label for="floatingInput">Email</label>
                    @error('email') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="text" name="phone" class="form-control" wire:model="phone" id="floatingInput" placeholder="phone">
                    <label for="floatingInput">Phone</label>
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" wire:model="password" id="floatingInput" placeholder="password">
                    <label for="floatingInput">Password</label>
                    @error('password') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-floating">
                    <input type="password" name="password_confirmation" class="form-control" wire:model="password_confirmation" id="floatingInput" placeholder="password_confirm">
                    <label for="floatingInput">Confirm Password</label>
                    @error('password_confirmation') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            @if($errors)
            @foreach ($errors as $item)
            <span>{{ $item }}</span>
            @endforeach
            @endif

            @if (session()->has('message'))
                <div class="alert alert-light">
                    {{ session('message') }}
                </div>
            @endif

        </div>


        <p class="form-submit">
            <input name="submit" type="submit" id="comment-reply" class="submit-register" value="Join now">
        </p>

    </form>
</div>
