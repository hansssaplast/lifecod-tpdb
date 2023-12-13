(function () {
	"use strict";

	var tinyslider = function () {
		var el = document.querySelectorAll(".testimonial-slider");

		if (el.length > 0) {
			var slider = tns({
				container: ".testimonial-slider",
				items: 1,
				axis: "horizontal",
				controlsContainer: "#testimonial-nav",
				swipeAngle: false,
				speed: 700,
				nav: true,
				controls: true,
				autoplay: true,
				autoplayHoverPause: true,
				autoplayTimeout: 3500,
				autoplayButtonOutput: false,
			});
		}
	};
	tinyslider();

	var sitePlusMinus = function () {
		var value,
			quantity = document.getElementsByClassName("quantity-container");

		function createBindings(quantityContainer) {
			var quantityAmount =
				quantityContainer.getElementsByClassName("quantity-amount")[0];
			var increase = quantityContainer.getElementsByClassName("increase")[0];
			var decrease = quantityContainer.getElementsByClassName("decrease")[0];
			increase.addEventListener("click", function (e) {
				increaseValue(e, quantityAmount);
			});
			decrease.addEventListener("click", function (e) {
				decreaseValue(e, quantityAmount);
			});
		}

		function init() {
			for (var i = 0; i < quantity.length; i++) {
				createBindings(quantity[i]);
			}
		}

		function increaseValue(event, quantityAmount) {
			value = parseInt(quantityAmount.value, 10);

			console.log(quantityAmount, quantityAmount.value);

			value = isNaN(value) ? 0 : value;
			value++;
			quantityAmount.value = value;
		}

		function decreaseValue(event, quantityAmount) {
			value = parseInt(quantityAmount.value, 10);

			value = isNaN(value) ? 0 : value;
			if (value > 0) value--;

			quantityAmount.value = value;
		}

		init();
	};
	sitePlusMinus();
})();

$(document).ready(function () {
	$(".product-selection").click(function () {
		let hasActive = $(this).hasClass("active");
		if (!hasActive) {
			$(this).parent().find(".product-selection").removeClass("active");
			$(this).addClass("active");
		} else {
			$(this).parent().find(".product-selection").removeClass("active");
		}
	});

	$(".increase").click(function () {
		var val = $(this).parent().parent().find(".quantity-amount").val();
		$(this)
			.parent()
			.parent()
			.find(".quantity-amount")
			.val(Number(val) + 1);
	});

	$(".decrease").click(function () {
		var val = $(this).parent().parent().find(".quantity-amount").val();
		if (val > 1) {
			val = $(this)
				.parent()
				.parent()
				.find(".quantity-amount")
				.val(Number(val) - 1);
		}
	});

	$(".hapus-keranjang").click(function () {
		if (confirm("Apakah yakin ingin menghapus?"))
			window.location.href =
				"./keranjang/hapus?id=" + $(this).parent().find("#id_produk").val();
	});
});
