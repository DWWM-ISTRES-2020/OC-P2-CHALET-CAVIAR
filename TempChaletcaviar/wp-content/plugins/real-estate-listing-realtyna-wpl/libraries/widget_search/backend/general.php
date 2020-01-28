<?php
/** no direct access * */
defined('_WPLEXEC') or die('Restricted access');

if($type == 'gallery' and !$done_this)
{
?>
<div class="search-field-wp search-field-gallery <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<?php echo __('No Option Available', 'real-estate-listing-realtyna-wpl'); ?>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif(in_array($type, array('date', 'datetime')) and !$done_this)
{
?>
<div class="search-field-wp search-field-date <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]">
				<option value="datepicker" <?php if (isset($value['type']) and $value['type'] == 'datepicker') echo 'selected="selected"'; ?>><?php echo __('Datepicker', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>">
            <input type="text" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption]" value="<?php echo (isset($value['extoption']) ? $value['extoption'] : ''); ?>" placeholder="<?php echo __('Min,Max,Icon like 1999-01-01,2020-01-01,0', 'real-estate-listing-realtyna-wpl'); ?>" title="<?php echo __('Min,Max like 1999-01-01,2020-01-01', 'real-estate-listing-realtyna-wpl'); ?>" />
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'feature' and !$done_this)
{
?>
<div class="search-field-wp search-field-feature <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]">
				<option value="checkbox" <?php if (isset($value['type']) and $value['type'] == "checkbox") echo 'selected="selected"'; ?>><?php echo __('Check box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="yesno" <?php if (isset($value['type']) and $value['type'] == "yesno") echo 'selected="selected"'; ?>><?php echo __('Any/Yes', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="select" <?php if (isset($value['type']) and $value['type'] == "select") echo 'selected="selected"'; ?>><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
                <?php if(isset($options['values'])): ?>
                <option value="option_single" <?php if (isset($value['type']) and $value['type'] == "option_single") echo 'selected="selected"'; ?>><?php echo __('Single Option', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="option_multiple" <?php if (isset($value['type']) and $value['type'] == "option_multiple") echo 'selected="selected"'; ?>><?php echo __('Multiple Options', 'real-estate-listing-realtyna-wpl'); ?></option>
                <?php endif; ?>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif(in_array($type, array('checkbox', 'tag', 'boolean')) and !$done_this)
{
?>
<div class="search-field-wp search-field-checkbox <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]">
				<option value="checkbox" <?php if (isset($value['type']) and $value['type'] == "checkbox") echo 'selected="selected"'; ?>><?php echo __('Check box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="yesno" <?php if (isset($value['type']) and $value['type'] == "yesno") echo 'selected="selected"'; ?>><?php echo __('Any/Yes', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="select" <?php if (isset($value['type']) and $value['type'] == "select") echo 'selected="selected"'; ?>><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'listings' and !$done_this)
{
    $listings = wpl_global::get_listings();
?>
<div class="search-field-wp search-field-listing <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div  class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this,'listings');" >
				<option value="select" <?php if (isset($value['type']) and $value['type'] == "select") echo 'selected="selected"'; ?> ><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="multiple" <?php if (isset($value['type']) and $value['type'] == "multiple") echo 'selected="selected"'; ?>><?php echo __('Multiple SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="checkboxes" <?php if (isset($value['type']) and $value['type'] == "checkboxes") echo 'selected="selected"'; ?>><?php echo __('Check boxes', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios" <?php if (isset($value['type']) and $value['type'] == "radios") echo 'selected="selected"'; ?>><?php echo __('Radio Buttons', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios_any" <?php if (isset($value['type']) and $value['type'] == "radios_any") echo 'selected="selected"'; ?>><?php echo __('Radio buttons with any', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="predefined" <?php if (isset($value['type']) and $value['type'] == "predefined") echo 'selected="selected"'; ?>><?php echo __('Predefined', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="select-predefined" <?php if (isset($value['type']) and $value['type'] == "select-predefined") echo 'selected="selected"'; ?>><?php echo __('Select Box from predefined items', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<span class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>" id="wpl_extoptions_span_<?php echo $field->id; ?>_1">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption][]" id="wpl_extoptions_select_<?php echo $field->id; ?>" <?php if (isset($value['type']) and $value['type'] == "select-predefined") echo 'multiple="multiple"'; ?>>
				<?php foreach ($listings as $list): ?>
					<option <?php if (isset($value['extoption']) and in_array($list['id'], $value['extoption'])) echo 'selected="selected"'; ?> value="<?php echo $list['id']; ?>"><?php echo $list['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</span>

	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'locations' and !$done_this)
{
?>
<div class="search-field-wp search-field-locations <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
    <h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this, 'locations');">
				<option value="simple" <?php if (isset($value['type']) and $value['type'] == 'simple') echo 'selected="selected"' ?>><?php echo __('Simple', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="locationtextsearch" <?php if (isset($value['type']) and $value['type'] == 'locationtextsearch') echo 'selected="selected"' ?>><?php echo __('Location Textsearch', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="advanced_locationtextsearch" <?php if (isset($value['type']) and $value['type'] == 'advanced_locationtextsearch') echo 'selected="selected"' ?>><?php echo __('Advanced Location Textsearch', 'real-estate-listing-realtyna-wpl'); ?></option>
                <?php if(wpl_global::check_addon('pro')): ?>
				<option value="radiussearch" <?php if (isset($value['type']) and $value['type'] == 'radiussearch') echo 'selected="selected"' ?>><?php echo __('Radius Search', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="googleautosuggest" <?php if (isset($value['type']) and $value['type'] == 'googleautosuggest') echo 'selected="selected"' ?>><?php echo __('Google Auto Suggest', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="mullocationkeys" <?php if (isset($value['type']) and $value['type'] == 'mullocationkeys') echo 'selected="selected"' ?>><?php echo __('Multiple Keywords', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="dropdown" <?php if (isset($value['type']) and $value['type'] == 'dropdown') echo 'selected="selected"' ?>><?php echo __('Dropdown', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="multiselect_dropdown" <?php if (isset($value['type']) and $value['type'] == 'multiselect_dropdown') echo 'selected="selected"' ?>><?php echo __('Multi-Select Dropdown', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="hier_dropdown" <?php if (isset($value['type']) and $value['type'] == 'hier_dropdown') echo 'selected="selected"' ?>><?php echo __('Hierarchical Dropdown', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="hier_multiselect_dropdown" <?php if (isset($value['type']) and $value['type'] == 'hier_multiselect_dropdown') echo 'selected="selected"' ?>><?php echo __('Hierarchical Multi-Select Dropdown', 'real-estate-listing-realtyna-wpl'); ?></option>
               	<option value="location_multipleradius" <?php if (isset($value['type']) and $value['type'] == 'location_multipleradius') echo 'selected="selected"' ?>><?php echo __('Location Multiple Radius', 'real-estate-listing-realtyna-wpl'); ?></option>
                <?php endif; ?>
			</select>
		</div>
        <div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>">
			<input type="text" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption]" value="<?php echo isset($value['extoption']) ? $value['extoption'] : ''; ?>" placeholder="<?php echo __('Location place-holder', 'real-estate-listing-realtyna-wpl'); ?>" title="<?php echo __('Location place-holder', 'real-estate-listing-realtyna-wpl'); ?>" />
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'neighborhood' and !$done_this)
{
?>
<div class="search-field-wp search-field-neighbornhood <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]">
				<option value="checkbox" <?php if (isset($value['type']) and $value['type'] == 'checkbox') echo 'selected="selected"'; ?>><?php echo __('Check box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="yesno" <?php if (isset($value['type']) and $value['type'] == 'yesno') echo 'selected="selected"'; ?>><?php echo __('Any/Yes', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="select" <?php if (isset($value['type']) and $value['type'] == 'select') echo 'selected="selected"'; ?>><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'number' and !$done_this)
{
?>
<div class="search-field-wp search-field-number <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this, 'number');">
				<option value="text" <?php if(isset($value['type']) and $value['type'] == 'text') echo 'selected="selected"'; ?>><?php echo __('Text', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="exacttext" <?php if(isset($value['type']) and $value['type'] == 'exacttext') echo 'selected="selected"'; ?>><?php echo __('Exact Text', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax" <?php if(isset($value['type']) and $value['type'] == 'minmax') echo 'selected="selected"'; ?>><?php echo __('Min/Max textbox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax_slider" <?php if(isset($value['type']) and $value['type'] == 'minmax_slider') echo 'selected="selected"'; ?>><?php echo __('Min/Max Slider', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax_selectbox" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox') echo 'selected="selected"'; ?>><?php echo __('Min/Max SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax_selectbox_plus" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox_plus') echo 'selected="selected"'; ?>><?php echo __('SelectBox+', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="minmax_selectbox_minus" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox_minus') echo 'selected="selected"'; ?>><?php echo __('SelectBox-', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="minmax_selectbox_range" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox_range') echo 'selected="selected"'; ?>><?php echo __('Range', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>">
			<input type="text" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption]" value="<?php echo isset($value['extoption']) ? $value['extoption'] : ''; ?>" placeholder="<?php echo __('min,max,increment like 0,10,1', 'real-estate-listing-realtyna-wpl'); ?>" title="<?php echo __('min,max,increment like 0,10,1', 'real-estate-listing-realtyna-wpl'); ?>" />
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'mmnumber' and !$done_this)
{
?>
<div class="search-field-wp search-field-number <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this, 'mmnumber');">
				<option value="text" <?php if(isset($value['type']) and $value['type'] == 'text') echo 'selected="selected"'; ?>><?php echo __('Text', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="selectbox" <?php if(isset($value['type']) and $value['type'] == 'selectbox') echo 'selected="selected"'; ?>><?php echo __('SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>">
			<input type="text" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption]" value="<?php echo isset($value['extoption']) ? $value['extoption'] : ''; ?>" placeholder="<?php echo __('min,max,increment like 0,10,1', 'real-estate-listing-realtyna-wpl'); ?>" title="<?php echo __('min,max,increment like 0,10,1', 'real-estate-listing-realtyna-wpl'); ?>" />
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'property_types' and !$done_this)
{
    $listings = wpl_global::get_property_types();
?>
<div class="search-field-wp search-field-property-type <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>
    
	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this,'property_types');" >
				<option value="select" <?php if (isset($value['type']) and $value['type'] == "select") echo 'selected="selected"'; ?> ><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="multiple" <?php if (isset($value['type']) and $value['type'] == "multiple") echo 'selected="selected"'; ?>><?php echo __('Multiple SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="checkboxes" <?php if (isset($value['type']) and $value['type'] == "checkboxes") echo 'selected="selected"'; ?>><?php echo __('Check boxes', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios" <?php if (isset($value['type']) and $value['type'] == "radios") echo 'selected="selected"'; ?>><?php echo __('Radio Buttons', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios_any" <?php if (isset($value['type']) and $value['type'] == "radios_any") echo 'selected="selected"'; ?>><?php echo __('Radio buttons with any', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="predefined" <?php if (isset($value['type']) and $value['type'] == "predefined") echo 'selected="selected"'; ?>><?php echo __('Predefined', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="select-predefined" <?php if (isset($value['type']) and $value['type'] == "select-predefined") echo 'selected="selected"'; ?>><?php echo __('Select Box from predefined items', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>" id="wpl_extoptions_span_<?php echo $field->id; ?>_1">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption][]" id="wpl_extoptions_select_<?php echo $field->id; ?>" <?php if (isset($value['type']) and $value['type'] == "select-predefined") echo 'multiple="multiple"'; ?>>
				<?php foreach ($listings as $list): ?>
					<option <?php if (isset($value['extoption']) and in_array($list['id'], $value['extoption'])) echo 'selected="selected"'; ?> value="<?php echo $list['id']; ?>"><?php echo $list['name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'text' and !$done_this)
{
?>
<div class="search-field-wp search-field-text <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]">
				<option value="text" <?php if(isset($value['type']) and $value['type'] == 'text') echo 'selected="selected"'; ?> ><?php echo __('Text', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="exacttext" <?php if(isset($value['type']) and $value['type'] == 'exacttext') echo 'selected="selected"'; ?> ><?php echo __('Exact text', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="checkbox" <?php if (isset($value['type']) and $value['type'] == "checkbox") echo 'selected="selected"'; ?>><?php echo __('Check box', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="yesno" <?php if (isset($value['type']) and $value['type'] == "yesno") echo 'selected="selected"'; ?>><?php echo __('Any/Yes', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif(in_array($type, array('select', 'multiselect')) and !$done_this)
{
?>
<div class="search-field-wp search-field-select <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this, 'select');">
				<option value="select" <?php if (isset($value['type']) and $value['type'] == 'select') echo 'selected="selected"'; ?>><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="multiple" <?php if (isset($value['type']) and $value['type'] == 'multiple') echo 'selected="selected"'; ?>><?php echo __('Multiple SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios" <?php if (isset($value['type']) and $value['type'] == 'radios') echo 'selected="selected"'; ?>><?php echo __('Radio Buttons', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios_any" <?php if (isset($value['type']) and $value['type'] == 'radios_any') echo 'selected="selected"'; ?>><?php echo __('Radio buttons with any', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="checkboxes" <?php if (isset($value['type']) and $value['type'] == 'checkboxes') echo 'selected="selected"'; ?>><?php echo __('Check boxes', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="predefined" <?php if (isset($value['type']) and $value['type'] == 'predefined') echo 'selected="selected"'; ?>><?php echo __('Predefined', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>">
			<select multiple="multiple" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption][]">
				<?php
				$options = $field->options;
				$options = json_decode($options, true);
				$options = $options['params'];

				foreach ($options as $option)
				{
					?>
					<option <?php if (isset($value['extoption']) and in_array($option['key'], $value['extoption'])) echo 'selected="selected"'; ?> value="<?php echo $option['key']; ?>"><?php echo $option['value']; ?></option>
					<?php
				}
				?>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif(in_array($type, array('user_type', 'user_membership')) and !$done_this)
{
?>
<div class="search-field-wp search-field-select <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this, 'select');">
				<option value="select" <?php if (isset($value['type']) and $value['type'] == 'select') echo 'selected="selected"'; ?>><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="multiple" <?php if (isset($value['type']) and $value['type'] == 'multiple') echo 'selected="selected"'; ?>><?php echo __('Multiple SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios" <?php if (isset($value['type']) and $value['type'] == 'radios') echo 'selected="selected"'; ?>><?php echo __('Radio Buttons', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="radios_any" <?php if (isset($value['type']) and $value['type'] == 'radios_any') echo 'selected="selected"'; ?>><?php echo __('Radio buttons with any', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="checkboxes" <?php if (isset($value['type']) and $value['type'] == 'checkboxes') echo 'selected="selected"'; ?>><?php echo __('Check boxes', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'textarea' and !$done_this)
{
?>
<div class="search-field-wp search-field-textarea <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<?php echo __('No Option Available', 'real-estate-listing-realtyna-wpl'); ?>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif(($type == 'area' or $type == 'mmarea' or $type == 'price' or $type == 'mmprice' or $type == 'length' or $type == 'mmlength' or $type == 'volume' or $type == 'mmvolume') and !$done_this)
{
?>
<div class="search-field-wp search-field-units <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this, '<?php echo $type; ?>');">
				<option value="minmax" <?php if(isset($value['type']) and $value['type'] == 'minmax') echo 'selected="selected"' ?>><?php echo __('Min/Max textbox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax_slider" <?php if(isset($value['type']) and $value['type'] == 'minmax_slider') echo 'selected="selected"' ?>><?php echo __('Min/Max Slider', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax_selectbox" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox') echo 'selected="selected"' ?>><?php echo __('Min/Max SelectBox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="minmax_selectbox_plus" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox_plus') echo 'selected="selected"' ?>><?php echo __('SelectBox+', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="minmax_selectbox_minus" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox_minus') echo 'selected="selected"'; ?>><?php echo __('SelectBox-', 'real-estate-listing-realtyna-wpl'); ?></option>
                <option value="minmax_selectbox_range" <?php if(isset($value['type']) and $value['type'] == 'minmax_selectbox_range') echo 'selected="selected"'; ?>><?php echo __('Range', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
		<div class="erow wpl_extoptions_span <?php echo (isset($value['type']) ? $value['type'] : ''); ?>">
			<input type="text" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption]" value="<?php echo (isset($value['extoption']) ? $value['extoption'] : ''); ?>" placeholder="<?php _e('min,max,increment like 0,10,1', 'real-estate-listing-realtyna-wpl'); ?>" title="<?php _e('min,max,increment like 0,10,1 (Sale)', 'real-estate-listing-realtyna-wpl'); ?>" />
            <?php if($type == 'price'): ?><input type="text" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][extoption2]" value="<?php echo (isset($value['extoption2']) ? $value['extoption2'] : ''); ?>" placeholder="<?php _e('min,max,increment for rental listings', 'real-estate-listing-realtyna-wpl'); ?>" title="<?php _e('min,max,increment (Rental)', 'real-estate-listing-realtyna-wpl'); ?>" /><?php endif; ?>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'textsearch' and !$done_this)
{
?>
<div class="search-field-wp search-field-textsearch <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]">
				<option value="textbox" <?php if (isset($value['type']) and $value['type'] == 'textbox') echo 'selected="selected"'; ?>><?php echo __('Textbox', 'real-estate-listing-realtyna-wpl'); ?></option>
				<option value="textarea" <?php if (isset($value['type']) and $value['type'] == 'textarea') echo 'selected="selected"'; ?>><?php echo __('Textarea', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'addon_calendar' and !$done_this)
{
?>
<div class="search-field-wp search-field-addon-calendar <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	<input type="hidden" id="field_type_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" value="addon_calendar" />

	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<?php echo __('No Option Available', 'real-estate-listing-realtyna-wpl'); ?>
		</div>
	</div>
</div>
<?php    
    $done_this = true;
}
elseif($type == 'ptcategory' and !$done_this)
{
?>
<div class="search-field-wp search-field-property-type <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />
	
	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?></span></h4>
    
	<div class="field-body">
		<div class="erow">
			<select name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][type]" onchange="selectChange(this,'property_types');" >
				<option value="select" <?php if (isset($value['type']) and $value['type'] == "select") echo 'selected="selected"'; ?> ><?php echo __('Select box', 'real-estate-listing-realtyna-wpl'); ?></option>
			</select>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}
elseif($type == 'separator' and !$done_this)
{
?>
<div class="search-field-wp search-field-separator <?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-id="<?php echo $field->id; ?>" data-status="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" data-field-name="<?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?> - <?php echo __("Separator", 'real-estate-listing-realtyna-wpl'); ?>">

	<input type="hidden" id="field_sort_<?php echo $field->id; ?>" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][sort]" value="<?php echo (isset($value['sort']) ? $value['sort'] : ''); ?>" />
	<input type="hidden" id="field_enable_<?php echo $field->id; ?>" onchange="elementChanged(true);" name="<?php echo $this->get_field_name('data'); ?>[<?php echo $field->id; ?>][enable]" value="<?php echo (isset($value['enable']) ? $value['enable'] : ''); ?>" />

	<h4><span><?php echo __($field->name, 'real-estate-listing-realtyna-wpl'); ?> - <?php echo __("Separator", 'real-estate-listing-realtyna-wpl'); ?></span></h4>

	<div class="field-body">
		<div class="erow">
			<?php echo __('No Option Available', 'real-estate-listing-realtyna-wpl'); ?>
		</div>
	</div>
</div>
<?php
    $done_this = true;
}