<?php get_header(); ?>
<section class="paginaempresa paginacontacto text-center ">
	<div class="clearfix paddingbot50"></div>
	<h2 class="letranaranja hvr-underline-from-center">Encuentranos</h2>
	<div class="gmap" id="mapa">
		<div class="google-wrapper">
			<iframe src="https://www.google.com/maps/d/embed?mid=zLAmHqF8yosM.kfDtupoT3yiw"></iframe>
		</div>
	</div>
	<div class="clearfix paddingbot50"></div>
	<div class="fondoblanco">
	<div class="clearfix paddingbot50"></div>
		<div class="container">
			<div class="contactanosinner">
					<h2 class="text-center">Contáctanos</h2><hr class="hrfooter" />
				<div class="col-md-12">
					<div class="row margin10 wow fadeIn" data-wow-delay="0.2s">
						<h4><i class="fa fa-map-marker fa-lg"></i> Dirección:<small> Zona industrial de Cabudare, Sector La Montañita, Cabudare - Edo. Lara.</small></h4>
					</div>
					<div class="row margin10 wow fadeIn" data-wow-delay="0.2s">
						<h4><i class="fa fa-phone fa-lg"></i>Teléfonos: <small>Compras 0424-5786047, Ventas 0424-5790861, <b>Gerencia General</b> 0414-954.54.73</small></h4>
					</div>
					<div class="row margin10 wow fadeIn" data-wow-delay="0.2s">
						<h4><i class="fa fa-envelope fa-lg"></i>Correos: <small>Ventas@metroacero.com, Gerenciadeventas@metroacero.com, rrhh@metroacero.com, <b>Gerencia General</b> Jpadilla@metroacero.com</small></h4>
					</div>
				</div>
			</div>

        <div ng-controller="ContactController">
            <form ng-submit="submit(contactform)" name="contactform" method="post" action="" role="form" class="col-xs-12  col-md-offset-2 col-md-8 margin50 paddingbot25">

				<span class="input input--yoshiko wow fadeIn" data-wow-delay="0.2s" ng-class="{ 'has-error': contactform.nombre.$invalid && submitted }">
					<input ng-model="formData.nombre"  class="input__field input__field--yoshiko" type="text" id="nombre" required />
					<label class="input__label input__label--yoshiko" for="nombre">
						<span class="input__label-content input__label-content--yoshiko" data-content="Nombre y Apellido">Nombre y Apellido</span>
					</label>
				</span>
				<span class="input input--yoshiko wow fadeIn" data-wow-delay="0.2s" ng-class="{ 'has-error': contactform.empresa.$invalid && submitted }">
					<input ng-model="formData.empresa"  class="input__field input__field--yoshiko" type="text" id="empresa" required />
					<label class="input__label input__label--yoshiko" for="empresa">
						<span class="input__label-content input__label-content--yoshiko" data-content="Empresa">Empresa</span>
					</label>
				</span>
				<span class="input input--yoshiko wow fadeIn" data-wow-delay="0.2s" ng-class="{ 'has-error': contactform.telefono.$invalid && submitted }">
					<input ng-model="formData.telefono"  class="input__field input__field--yoshiko" type="text" id="telefono" required />
					<label class="input__label input__label--yoshiko" for="telefono">
						<span class="input__label-content input__label-content--yoshiko" data-content="Teléfono">Teléfono</span>
					</label>
				</span>
				<span class="input input--yoshiko wow fadeIn" data-wow-delay="0.2s" ng-class="{ 'has-error': contactform.email.$invalid && submitted }">
					<input ng-model="formData.email"  class="input__field input__field--yoshiko" type="text" id="email" required />
					<label class="input__label input__label--yoshiko" for="email">
						<span class="input__label-content input__label-content--yoshiko" data-content="Email">Email</span>
					</label>
				</span>
                <div class="form-group  wow fadeIn" data-wow-delay="0.2s">
                  <select ng-model="formData.motivo"  id="motivo" name="motivo" class="inputfield " ng-class="{ 'has-error': contactform.motivo.$invalid && submitted }" required>
                  	<option value="" disabled selected hidden>Seleccionar departamento a enviar</option>
				    <option value="compras">Compras</option>
				    <option value="ventas">Ventas</option>
				    <option value="rrhh">Recursos Humanos</option>
				  </select>
                </div>
                <div class="form-group wow fadeIn" data-wow-delay="0.2s" ng-class="{ 'has-error': contactform.message.$invalid && submitted }">
                    <textarea  ng-model="formData.message" id="message" name="message" class="inputfield form-control" rows="15" style="resize: vertical;" placeholder="Tu Mensaje"  required></textarea>
                </div>
                
                <button  type="submit" ng-disabled="submitButtonDisabled" class="btn btn-metroacero hvr-icon-grow-rotate wow fadeIn" data-wow-delay="0.2s"> Enviar</button>
            </form>
            <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
            </div>
        </div>
    </div>
	<div class="clearfix paddingbot50"></div>
</section>
		<script src="<?php echo get_bloginfo('template_directory');?>/js/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				[].slice.call( document.querySelectorAll( 'textarea.inputfield' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/app.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/controllers.js"></script>
<?php get_footer(); ?>