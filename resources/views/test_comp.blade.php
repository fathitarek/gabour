<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Hyundai CV</div>
				<div class="quote">New Website</div>
				@if(!is_null($fields['universal_textarea_field']))
                    @include('Admin.form_parcials.universal_textarea_field',['name'=>$fields['universal_textarea_field'][0],'label'=>$fields['universal_textarea_field'][1]])
                @endif
                @if(!is_null($fields['universal_text_field']))
                    @include('Admin.form_parcials.universal_text_field',['name'=>$fields['universal_text_field'][0],'label'=>$fields['universal_text_field'][1]])
                @endif
                @if(!empty($fields['test']))
                    @include('Admin.form_parcials.test',['name'=>$records[$index]['name'],'label'=>$records[$index]['display_name_en']])
                @endif
			</div>
		</div>
	</body>
</html>
