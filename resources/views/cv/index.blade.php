@extends('layouts.app')
@section('title', 'Submit CV')
@section('content')
    <section class="py-5" style="background-image: url({{ asset('assets/images/shape/shape-4.png') }})">
        <div class="container">
            <!-- Submit Application-->
            <form class="konnect-form" autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                enctype="multipart/form-data" id="create-form">
                @csrf
                <div class="row">
                    <div class="col-xl-12">
                        <div class="coaching-content-box">
                            <div class="sec-title">
                                <h2>Submit CV</h2>
                                <h3>FAPPLY YOUR <span>JOB</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="py-1">
                            <label>Name*</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="py-1">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="py-1">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="py-1">
                            <label>Country you want to go to*</label>
                            <select name="country" class="form-control">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->country ?? '' }}">
                                        {{ $country->country ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="py-1">
                            <label>Gender*</label>
                            <select name="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="py-1">
                            <label>Current Address</label>
                            <input type="text" name="current_address"
                                class="form-control @error('current_address') is-invalid @enderror"
                                value="{{ old('current_address') }}">
                            @error('current_address')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="py-1">
                            <label>Additional Note</label>
                            <input type="text" name="additional_note"
                                class="form-control @error('additional_note') is-invalid @enderror"
                                value="{{ old('additional_note') }}">
                        </div>


                        <div class="py-1">
                            <label for="img">Select your CV to upload</label>
                            <br>
                            <input type="file" name="attachment_file" accept=".doc, .docx, .pdf">
                            @error('attachment_file')
                                <div class="help-block with-errors text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <br>
                        <div class="button-box">
                            <button class="btn-one" type="submit">
                                <span class="txt">Apply Now</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
