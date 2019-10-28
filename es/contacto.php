<?php
include('header.php');
?>

<?php
include('menu.php');
?>

<main>
  <div class="contenido-web">
    <div class="container">

      <section id="contacto">

        <div class="contenido-texto">
          <div class="row">
            <div class="col-md-12">
              <h2>Contacto</h1>
            </div>
          </div>
        </div>

        <div class="contenido-texto">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <!-- <div class="formulario">
                <form action="" onfocus="MM_validateForm('NOMRE','','R','TELEFONO','','RisNum','EMAIL:','','RisEmail','EMPRESA:','','R');return document.MM_returnValue">
                  <input type=hidden name="id" value="23668">
                  <input type=hidden name="subject" value="Consulta desde Mekatech">
                  <div class="form-contact input_user">
                    <input class="input-contact" type="text" name="NOMBRE:" id="NOMRE" placeholder="Nombre:" />
                  </div>
                  <div class="form-contact input_phone">
                    <input class="input-contact" type="tel" name="TELEFONO:" id="TELEFONO" placeholder="Teléfono:" />
                  </div>
                  <div class="form-contact input_mail">
                    <input class="input-contact" type="email" name="EMAIL:" id="EMAIL:" placeholder="Email:" />
                  </div>
                  <div class="form-contact input_emp">
                    <input class="input-contact" type="text" name="EMPRESA:" id="EMPRESA:" placeholder="Empresa:" />
                  </div>
                  <div class="form-contact">
                    <div>¿Esta usted interesado en?</div>
                    <select name="INTERESADO EN:" por="por" parte="parte" de:="de:" id="Invitado por parte de:">
                      <option value="no selecciono">Seleccione una opción</option>
                      <option value="Información y descripción de productos">Información y descripción de productos</option>
                      <option value="Cotización a consumidor final">Cotización a consumidor final</option>
                      <option value="Venta a consumidor final">Venta a consumidor final</option>
                      <option value="información para crédito directo">Información para financiamiento</option>
                    </select>
                  </div>
                  <div class="form-contact">
                    <div>¿Como desea que lo contactemos?</div>
                    <select name="CONTACTAR POR:" recibidos="Recibidos" id="Boletos Recibidos">
                      <option value="no selecciono">Selecciona una opción</option>
                      <option value="Teléfono">Teléfono</option>
                      <option value="Email">Email</option>
                    </select>
                  </div>
                  <div class="form-contact">
                    <div>¿Como se entero de nosotros?</div>
                    <select name="SE ENTERO POR:" que="que" asistirán="asistirán" id="Personas que asistirán">
                      <option value="No selecciono">Selecciona una opción</option>
                      <option value="Recomendación">Recomendación</option>
                      <option value="Búsqueda Web">Búsqueda Web</option>
                      <option value="Anuncio Impreso">Anuncio Impreso</option>
                      <option value="Comercial Tv">Comercial Tv</option>
                      <option value="Flyer - Propaganda">Flyer - Propaganda</option>
                    </select>
                  </div>
                  <div class="form-contact">
                    <textarea name="COMENTARIOS" rows="4" id="COMENTARIOS" placeholder="Comentarios & Observaciones:"></textarea>
                  </div>
                  <div class="form-contact">
                    <input name="ENVIAR" type="submit" class="btn btn-contacto" id="ENVIAR" onClick="MM_validateForm('TELEFONO','','RisNum');return document.MM_returnValue"" value=" Enviar Confirmación" "MM_validateForm('NOMBRE','','RisNum');return document.mm_returnvalue=" document.MM_returnValue" />
                  </div>
                </form>

              </div> -->

              <div class="formulario">
                <!-- Note :
                  - You can modify the font style and form style to suit your website. 
                  - Code lines with comments ���Do not remove this code���  are required for the form to work properly, make sure that you do not remove these lines of code. 
                  - The Mandatory check script can modified as to suit your business needs. 
                  - It is important that you test the modified form before going live.-->
                <div id="crmWebToEntityForm" style="width:100%; margin:auto;">
                  <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                  <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2117231000008723021 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory2117231000008723021()' accept-charset='UTF-8'>
                    <input type='text' style='display:none;' name='xnQsjsdp' value='aee5de623a0dfdee01bef0c65193646757779f1650f6dacaab77624acfa8f4ae'></input>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                    <input type='text' style='display:none;' name='xmIwtLD' value='c1fe7d833738464f91b2b049c051a3ea2e017d7bb56d78f3c534f36768b8fc72'></input>
                    <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                    <input type='text' style='display:none;' name='returnURL' value='http://www.mekatech.tv/es/contacto.php'> </input>
                    <!-- Do not remove this code. -->
                    <style>
                      .botones {
                        text-align: center;
                        width: 100%;
                        display: flex;
                      }

                      .botones .btn-contacto {
                        width: 40%;
                      }
                    </style>
                    <div>
                      <div class="form-contact input_user">
                        <input class="input-contact" placeholder="Nombre:" type="text" maxlength="40" name="First Name" />
                      </div>
                      <div class="form-contact input_user">
                        <input class="input-contact" placeholder="Apellido:" type="text" maxlength="80" name="Last Name" />
                      </div>
                      <div class="form-contact input_phone">
                        <input class="input-contact" placeholder="Teléfono:" type="text" maxlength="30" name="Phone" />
                      </div>
                      <div class="form-contact input_mail">
                        <input class="input-contact" placeholder="Email:" type="text" maxlength="100" name="Email" />
                      </div>
                      <div class="form-contact input_emp">
                        <input class="input-contact" placeholder="Empresa:" type="text" maxlength="100" name="Company" />
                      </div>
                      <div class="form-contact">
                        <textarea name="Description" rows="4" placeholder="Descripción:" maxlength="32000"></textarea>
                      </div>

                      <div class="form-contact">
                        <div class="botones">
                          <input class="btn btn-contacto" id="formsubmit" type="submit" value="Enviar"></input>
                          <input class="btn btn-contacto" type="reset" name="reset" value="Restablecer"></input>
                        </div>
                      </div>
                    </div>

                    <script>
                      var mndFileds = new Array('First Name', 'Last Name', 'Email', 'Phone');
                      var fldLangVal = new Array('Nombre', 'Apellidos', 'Correo electrónico', 'Teléfono');
                      var name = '';
                      var email = '';

                      function checkMandatory2117231000008723021() {
                        for (i = 0; i < mndFileds.length; i++) {
                          var fieldObj = document.forms['WebToLeads2117231000008723021'][mndFileds[i]];
                          if (fieldObj) {
                            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                              if (fieldObj.type == 'file') {
                                alert('Seleccione un archivo para cargar.');
                                fieldObj.focus();
                                return false;
                              }
                              alert(fldLangVal[i] + ' no puede estar vacío.');
                              fieldObj.focus();
                              return false;
                            } else if (fieldObj.nodeName == 'SELECT') {
                              if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                alert(fldLangVal[i] + ' no puede ser nulo.');
                                fieldObj.focus();
                                return false;
                              }
                            } else if (fieldObj.type == 'checkbox') {
                              if (fieldObj.checked == false) {
                                alert('Please accept  ' + fldLangVal[i]);
                                fieldObj.focus();
                                return false;
                              }
                            }
                            try {
                              if (fieldObj.name == 'Last Name') {
                                name = fieldObj.value;
                              }
                            } catch (e) {}
                          }
                        }
                        document.getElementById('formsubmit').disabled = true;
                      }
                    </script>
                  </form>
                </div>

              </div>

            </div>
            <div class="col-md-5">
              <div class="content-mapa">
                <iframe class="mapa" width="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7598.241023980602!2d-98.42589528472436!3d19.267319974047066!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDE1JzU4LjUiTiA5OMKwMjUnMzEuNCJX!5e0!3m2!1ses-419!2sus!4v1568155865887!5m2!1ses-419!2sus" width="600" height="450" frameborder="0" allowfullscreen=""></iframe>
              </div>
              <div class="tel-contacto">
                <h5>Informes</h5>
                <p><strong>Teléfono:</strong> 01 (55) 2166 4321</p>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>


        </div>


      </section>

    </div>
  </div>
</main>


<?php
include('footer.php');
?>