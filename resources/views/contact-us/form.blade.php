<form class="widget-contact-form" novalidate action="{{ route('contact-us.store') }}" role="form" method="post">
    @csrf

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">Name</label>
            <input type="text" aria-required="true" required name="name" value="{{ old('name') }}" class="form-control required name" placeholder="Enter your Name">

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" aria-required="true" required name="email" value="{{ old('name') }}" class="form-control required email" placeholder="Enter your Email">

            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label for="subject">Your Subject</label>
            <input type="text" name="subject" required value="{{ old('subject') }}" class="form-control required" placeholder="Subject...">

            @error('subject')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea type="text" name="message" required rows="5" value="{{ old('message') }}" class="form-control required" placeholder="Enter your Message"></textarea>

        @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button class="btn" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
</form>