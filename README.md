## Projek untuk belajar Laravel
Content management system untuk Blog

 - [x] Posts CRUD
 - [x] Categories CRUD
 - [x] Tags CRUD
 - [x] Auth system
 - [ ] multiple security level
 - [ ] Post-article multiple choices
 - [x] Comments
 - [ ] nested comment->reply
 - [x] wysiwyg
 - [ ] wysiwyg images
 - [ ] Count page visits

**Laravel** `v.6.2` **PHP Framework** [@](https://laravel.com/)

**laravelcollective** `v.6.0` [@](https://laravelcollective.com/)
* Form helper
```php
{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
	{{ Form::label('title', 'Title:') }}
	{{ Form::text('title', null, array('class' => 'form-control form-control-lg', 'required' => '', 'maxlength' => '255')) }}

	{{ Form::label('slug', 'Slug:') }}
	{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-parsley-alphadash' => '')) }}

	{{ Form::label('body', 'Post Body:') }}
	{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

	{{ Form::submit('Create New Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}

  {!! Form::close() !!}
```
* HTML helper
```php
{!! Html::script('js/parsley.min.js') !!}
{!! Html::script('js/select2.min.js') !!}
```

**dotrine/dbal** `v2.10.1` [@](https://www.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/query-builder.html#sql-query-builder)
* Query Builder

**Parsley.js** `v2.9.2` [@](https://parsleyjs.org/)
* Form Validator
```php
{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255', 'data-parsley-alphadash' => '')) }}
```
```javascript
window.Parsley.addValidator('alphadash', {
	validateString:  function(value) {
		return  true == (/^[a-z-_]+$/.test(value));
	},
	messages: {
		en:  'Only alphabetic letters, dashes and underscores allowed.'
	}
});
```

**Select2.js** `v4.0.12` [@](https://select2.org/)
* Form Multiple Select
```php
<select  name="tag[]"  class="form-control select2-multi-tag"  multiple="multiple">
	@foreach($tags as $tag)
	<option  value="{{ $tag->id }}">{{ $tag->name }}</option>
	@endforeach
</select>
```
```javascript
$(document).ready(function() {
	$('.select2-multi-tag').select2();
});
```

**tinyMCE** `v5` [@](https://www.tiny.cloud/)
* WYSIWYG editor
```html
<textarea id="default">Hello, World!</textarea>
```
```javascript
tinymce.init({
  selector: 'textarea#default',
});
```
