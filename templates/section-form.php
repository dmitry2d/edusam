<?php
/*
* Section Form
*/
?>

<script src="https://www.google.com/recaptcha/api.js?render=6Ldwkk0qAAAAAC7FbbXyggkEyhSH1QMy077QDmJr"></script>
<script>
	grecaptcha.ready(function() {
		let form = document.getElementById("order_form");
		let submitBtn = document.getElementById("order_form_submit");
		submitBtn.addEventListener("click", function(event) {
			event.preventDefault();
			grecaptcha.execute("6Ldwkk0qAAAAAC7FbbXyggkEyhSH1QMy077QDmJr", {action: "contact"}).then(function(token) {
				document.getElementById("recaptchaResponse").value = token;
				form.requestSubmit(submitBtn);
			});
		});
	});
</script>
<div class="order" id="order_form_block">
	<div class="container">
		<h1>Подать заявку на аренду авто</h1>
		<p>Постарайтесь заполнить форму ниже предельно корректно и внимательно, чтобы мы могли перезвонить Вам максимально быстро. </p>

		<form id="order_form" class="form" method="post">
			<div class="form-item">
				<label for="form_name">ФИО полностью, без сокращений</label>
				<input id="form_name" type="text" name="name" required placeholder="Иванов Иван Иванович">
			</div>
			<div class="form-item">
				<label for="form_date">Дата рождения</label>
				<input id="form_date" type="text" name="date" required placeholder="25.12.1980" class="date-inp">
			</div>
			<div class="form-item">
				<label for="form_vu">Серия и номер водительского удостоверения (ВУ)</label>
				<input id="form_vu" type="text" name="vu" required placeholder="99 AB 999999" class="vu-inp">
			</div>
			<div class="form-item">
				<label for="form_vu_date">Дата выдачи водительского удостоверения (ВУ)</label>
				<input id="form_vu_date" type="text" name="vu_date" required placeholder="26.01.2000" class="date-inp">
			</div>
			<div class="form-item">
				<label for="form_phone">Номер телефона</label>
				<input id="form_phone" type="text" name="phone" required placeholder="+7 (___) ___-__-__" class="phone-number-inp">
			</div>
			<input type="hidden" name="g_recaptcha_response" id="recaptchaResponse">
			<input class="btn" id="order_form_submit" type="submit" value="Подать заявку">
		</form>
	</div>
</div>

<style>
  .order {
  	background: #fff;
  	padding: 45rem 0 45rem;
  }
	.form {
	}
	.form-item {
		padding: 10rem 0;
	}
	.form-item label {
	  display: inline-block;
		padding: 0 0 10rem;
	}
	.form-item input {
	  display: flex;
	  width: 100%;
	  max-width: 300rem;
		padding: 10rem 15rem;
		font-size: 18rem;
	}
	.form-item input.error {
		border-color: #dd3334;
	}
	.form .btn {
	  margin-top: 15rem;
		width: 200rem;
		height: 50rem;
		display: flex;
		align-items: center;
		justify-content: center;
		border: 0;
		background: #353637;
		border-radius: 3rem;
		color: #fff;
		cursor: pointer;
		font-size: 18rem;
		transition: 0.5s all;
	}
	.form .btn:hover {
		box-shadow: 0px 0px 20rem 0px rgba(0, 0, 0, 0.15);
		background: #dd3334;
	}
	.grecaptcha-badge {
		display: none !important;
	}
	label.error {
		color: #dd3334;
		display: block;
		padding-top: 4rem;
	}
	.success-alert {
		color: #dd3334;
	}
</style>
