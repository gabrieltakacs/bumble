<div class="control g-row">
    <div class="g-col-2 tar">
        {!! BumbleForm::label($field->getColumn(), $field->getTitle(), ['class' => 'label label--tar'.$model->getRequiredClass($field)]) !!}
    </div>
    <?php
    $editable = true;
    if(key_exists('editable', $field->getOptions())){
        $editable = $field->getOptions()['editable'];
    }
    ?>
    <div class="g-col-10">

        <?php if ($editable):?>
        {!! BumbleForm::text($field->getColumn(), $field->getDefaultValue($editing) ?: null, ['class' => 'input input1 ', 'placeholder' => $field->getPlaceholder()]) !!}
        <?php else:?>

        {!! BumbleForm::text($field->getColumn(), $field->getDefaultValue($editing) ?: null, ['class' => 'input input1 ', 'placeholder' => $field->getPlaceholder(), 'disabled']) !!}
        <?php endif; ?>
    </div>
</div>
