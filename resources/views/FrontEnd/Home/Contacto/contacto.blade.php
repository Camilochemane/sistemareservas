
@extends('FrontEnd.Home.layout')
@section('content')

          <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2><strong> Contacte nos</strong></h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contacte nos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        
        <!-- contact-form-section -->
        <section class="section-padding">
          
          <div class="container">

              <div class="text-center mb-80">
                  <h2 class="section-title text-uppercase"><strong> Contacte nos</strong></h2>
              </div>

            <div class="row">
                <div class="col-md-8">
                    <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input type="text" name="name" class="validate" id="name">
                            <label for="name">Nome</label>
                          </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" type="email" name="email" class="validate" >
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="phone" type="tel" name="phone" class="validate" >
                            <label for="phone">No Tel:</label>
                          </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="website" type="text" name="website" class="validate" >
                            <label for="website">empresa</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Messagem</label>
                      </div>

                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">enviar Messagem</button>
                    </form>
                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info">

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                        <p>Av: 24 de Julho no 397 C.P. 1404<br>
                        Maputo-Mozambique</p>
                      </div>
                      <hr>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Phone: (258)821320813/843966650</p>
                      </div>
                      <hr>
                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#">carlitos@gmail.com</a><br>
                        
                      </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>
        </section>
        <!-- contact-form-section End -->


        <!-- map-section -->
         <div class="height-350">
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14347.15671729015!2d32.57811335023195!3d-25.97495363458808!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x853143dc2c353d98!2zQ29taXTDqSBPbMOtbXBpY28gRGUgTW_Dp2FtYmlxdWU!5e0!3m2!1spt-PT!2smz!4v1476536239891" width="1600" height="350" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
         </div>
 @stop