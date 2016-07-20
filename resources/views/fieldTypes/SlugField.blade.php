<div class="control g-row">
    <div class="g-col-2 tar">
        {!! BumbleForm::label($field->getColumn(), $field->getTitle(), ['class' => 'label label--tar '.$model->getRequiredClass($field)]) !!}
    </div>
    <div class="g-col-10">
        {!! BumbleForm::text($field->getColumn(), $field->getDefaultValue($editing) ?: null, ['class' => 'input input1', 'placeholder' => $field->getPlaceholder()]) !!}
    </div>
    <script>
        $('#slug').attr('readonly','');
        $('#slug').addClass('inactive');

        $('#{!! $field->getSetFrom()!!}').on('keyup',function () {
            console.log($(this));
            console.log($(this).val());
            $.ajaxPrefilter(function(options, originalOptions, xhr) { // this will run before each request
                var token = $('input[name="_token"]').val(); // or _token, whichever you are using

                if (token) {
                    return xhr.setRequestHeader('X-CSRF-TOKEN', token); // adds directly to the XmlHttpRequest Object
                }
            });

            $.ajax({
                        type:'POST',
                        url:'/slugify/'+$(this).val(),
                        success: function(data, textStatus, jqXHR)
                        {

                            $('#slug').val(data)
                            $('#logo').val('/images/places/' + data +'/')
                            $('#cover_image').val('/images/places/' + data +'/')
                        }
                    }
            )
        })

    </script>
</div>

