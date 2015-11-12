<? include("_header.php");?>

<!--========================================================
                            CONTENT
  =========================================================-->
<section id="content">
	<article>
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<!--=======================-->
					<h2 class="text-6 box-3-1 color-4 wow fadeInUp">Контакты</h2>
					<!--=======================-->
				</div>
				<div class="grid_12">
					<!--=======================-->
					<section class="map" >
						<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=EpiyROxAxGRSUb--6TsYoLDCa5xxeh7k&width=100%&height=450&lang=ru_RU&sourceType=constructor"></script>
					</section>
					<!--=======================-->
				</div>
				<div class="grid_4">
					<!--=======================-->
					<h2 class="text-6 box-3-3 color-4 wow fadeInUp">Адрес</h2>
					<address class="address wow fadeInLeft">
						<dl>
							<dt><span class="text-4 color-4">9870 St Vincent Place,<br>Glasgow, DC 45 Fr 4</span></dt>
							<dd><span>Freephone:</span>+1 800 559 6580</dd>
							<dd><span>Telephone:</span>+1 800  603 6035</dd>
							<dd><span>FAX:</span>+1 800  889 9898</dd>
							<dd>E-mail: <a href="mailto:mail@demolink.org" class="text__underline color-7">mail@demolink.org</a></dd>
						</dl>
					</address>
					<!--=======================-->
				</div>
				<div class="grid_8">
					<!--=======================-->
					<h2 class="text-6 box-3-3 color-4 wow fadeInUp">Обратная связь</h2>
					<form id="contact-form">
						<div class="contact-form-loader"></div>
						<fieldset>
							<label class="name">
								<input type="text" name="name" placeholder="Name*" value="" data-constraints="@Required @JustLetters">
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
							<label class="email">
								<input type="text" name="email" placeholder="Email*" value="" data-constraints="@Required @Email">
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
								<input type="text" name="phone" placeholder="Phone" value="" data-constraints="@JustNumbers">
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label>
							<label class="message">
								<textarea name="message" placeholder="Message*" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>

							<div class="contact-form_bottom-section">
								<a href="#" class="btn" data-type="submit">Send</a>
								<div>*required fields</div>
							</div>
						</fieldset>
						<div class="modal fade response-message">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										You message has been sent! We will be in touch soon.
									</div>
								</div>
							</div>
						</div>
					</form>
					<!--=======================-->
				</div>
			</div>
		</div>
	</article>
</section>


<? include("_footer.php");?>