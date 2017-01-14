<div class="control g-row">
    <div class="g-col-2 tar">
        {!! BumbleForm::label($field->getColumn(), $field->getRelatedTitle(), ['class' => 'label label--tar'.$model->getRequiredClass($field)]) !!}
    </div>
    <div class="g-col-10">
        <?php
        $values = [];

        if ( ! $model->fieldIsRequired($field)) $values[0] = '--';

        $options = $model->{$field->method()}()->getRelated()->lists($field->getRelatedTitleColumn(), 'id');

        foreach ($options as $key => $value)
        {
            $values[$key] = $value;
        }

        if ($field->hidesSelf())
        {
            // This entries ID
            $removeId = \BumbleForm::getValueAttribute('id');

            // Remove this entry from the values
            if (isset($removeId)) unset($values[$removeId]);
        }
        ?>
        <?php
        $editable = true;
        if(key_exists('editable', $field->getOptions())){
            $editable = $field->getOptions()['editable'];
        }
        ?>
        <?php if ($editable):?>
        {!! BumbleForm::select($field->getColumn(), $values, null, ['class' => 'input input1', 'placeholder' => $field->getPlaceholder()]) !!}
        <?php else:?>
        {!! BumbleForm::hidden($field->getColumn(),  $post->getAttributes()[$field->getColumn()], null, ['class' => 'input input1', 'placeholder' => $field->getPlaceholder()]) !!}
        {!! BumbleForm::text($field->getColumn() . '_visualisation', $values[$post->getAttributes()[$field->getColumn()]], ['class' => 'input input1', 'placeholder' => $field->getPlaceholder(), 'disabled'])   !!}
        <?php endif; ?>
    </div>
</div>
<?php /*
*/ ?>