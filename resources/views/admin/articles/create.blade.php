@extends("layouts.admin")

@section("css")

@endsection

@section("content")

    <x-admin.layouts.card class="w-50 mx-auto">

        <x-slot name="title">
            Be a ghost producer, be ghost produced

        </x-slot>

        <x-slot name="content">
            <form action="" class="w-100 text-start">
{{--                <div>--}}
{{--                    <label for="name" class="mb-2">Article Name</label>--}}
{{--                    <input type="text" name="name" id="name" class="form-control" placeholder="Article Name">--}}

{{--                </div>--}}

                <x-admin.elements.input
                    :labelClasses="'text-danger'"
                    :id="'name'"
                    :name="'name'"
                    :inputClasses="''"
                    :placeholder="'Name'"
                    :isDisabled="false"
{{--                    :defaultValue="'test'"--}}
                    :type="'text'"
                    :parentClass="''"
                >
                 <x-slot:label>
                     Artist
                 </x-slot:label>

                </x-admin.elements.input>

                @php
                    $options = [
                                 '-1' => 'Pick Category',
                                 '1' => 'Producers',
                                 '2' => 'Performers'
                               ];
                @endphp
                <x-admin.elements.select
                    :labelClasses="'mb-2'"
                    :id="'category'"
                    :name="'category'"
{{--                    :inputClasses="''"--}}
                    :isDisabled="false"
                    :parentClass="'mt-3'"
                    :options="$options"
{{--                    :defaultValue="'2'"--}}

                >
                    <x-slot:label>
                     Article Category
                    </x-slot:label>

                </x-admin.elements.select>

                <x-admin.elements.textarea
                    :labelClasses="'mb-2'"
                    :id="'articleContent'"
                    :name="'articleContent'"
                    :inputClasses="''"
                    :placeholder="'Demo Content'"
                    :isDisabled="false"
                    :parentClass="'mt-3'"
                    :rows="'5'"
                    :style="'resize:none'"

                    >
                    <x-slot:label>
                        Describe your demo briefly
                    </x-slot:label>
                </x-admin.elements.textarea>


                 <x-admin.elements.input
                     :type="'checkbox'"
                     :name="'status'"
                     :id="'status'"
                     :input-classes="'me-3'"
                     :default-value="'1'"
                     :label-classes="'mb-2'"
                     :parent-classes="'mt-3'"
                     :isLabelAfter="true"
                     >

                     <x-slot name="label">
                     Accept Terms and Conditions
                     </x-slot>



                 </x-admin.elements.input>
                <hr>

                <div class="mt-3">
                    <input type="submit"
                           name="status" id="btnSave"
                           class="btn btn-success w-100"
                           value="Send"
                           formaction="{{url('http://fameyourghost.test/') }}">
                </div>

            </form>
        </x-slot>

        <x-slot name="footer">
            <div class="col-md-6 col-lg-8">
          <h1>We hope you best!</h1>

          <ul class="list-unstyled mb-3 mb-md-0">
            <li><strong>Tags:</strong>Artists </li>
            <li><strong>Category:</strong> Music</li>
          </ul>
        </div>
            Do not hesitate to share your demos! Our exclusive A&R team will feedback you ASAP.
        </x-slot>


    </x-admin.layouts.card>


@endsection

@section("js")

@endsection
