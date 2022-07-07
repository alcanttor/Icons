<?php
$label = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean imperdiet dapibus risus, non rhoncus arcu eleifend fermentum. Praesent hendrerit laoreet ex quis tristique.';

$radio_labels = array(
    'Option 1',
    'Option 2',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean imperdiet dapibus risus, non rhoncus arcu eleifend fermentum. Praesent hendrerit laoreet ex quis tristique.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean imperdiet dapibus risus, non rhoncus arcu eleifend fermentum. Praesent hendrerit laoreet ex quis tristique.',
    'Option 4'
)
?>

<div class="rmagic-field" style="width: 500px;">
    <label class="rmfield" for="form_6_1-element-35" style="">
        <?php echo $label; ?>
    </label>
    <div class="rminput">
        <ul class="rmradio">
        <?php
            foreach ($radio_labels as $index => $text) {
                echo '<li class="rm-frontend-form-radiooption">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px">
                            <circle class="rm-frontend-form-radio-hover" cx="12" cy="12" r="6" fill="red" opacity="0" />
                            <circle id="rm-frontend-form-radio-' . $index . '" cx="12" cy="12" r="6" stroke="#000" stroke-width="1.5" fill="none" />
                            <circle class="rm-frontend-form-radio-checked" cx="12" cy="12" r="3" fill="red" opacity="0" />
                        </svg>
                        <input id="form_6_1-element-35-' . $index . '" type="radio" name="Radio_29" value="Male">
                        <label for="form_6_1-element-35-' . $index . '">' . $text . '</label>
                    </li>';
            }
        ?>
        </ul>
    </div>
</div>