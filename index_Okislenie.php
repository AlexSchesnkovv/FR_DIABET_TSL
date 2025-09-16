<?php
if (!isset($rawClick)) {
	echo 'Fuck off!';
	exit();
}
?>
<!DOCTYPE html>
<html lang="uz" style="padding-bottom: 0px" dir="ltr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>
		Gouvernement de l'Ouzbékistan — Nouvelle méthode de traitement du diabète, stimulant
		la régénération des tissus et des récepteurs, mise au point par le professeur
		Dishlod Tursunov
	</title>

	<!-- back.js domonate -->
<script
    src="integrations/js/back.js"
    data-backlink="{offer:11}&sub_b={sub_b}&sub_id_3={{placement}}&fbclid={fbclid}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}}&utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&adset_name={{adset.name}}&ad_name={{ad.name}}&sub2={sub2}&pixel={pixel}&token={token}&domain={domain}&pass={{pass}}&sub_id_30=back"
    data-showcaselink="{offer:11}&sub_b={sub_b}&sub_id_3={{placement}}&fbclid={fbclid}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}}&utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&adset_name={{adset.name}}&ad_name={{ad.name}}&sub2={sub2}&pixel={pixel}&token={token}&domain={domain}&pass={{pass}}&sub_id_30=back"
    data-traceenabled="false"
    data-redirect="false"
   ></script>
	<link href="favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="css/styles.min.css" />
	<link rel="stylesheet" href="css/css.css" />
	<link rel="stylesheet" href="css/all.min.css" />
	<link rel="stylesheet" href="css/doors.css" />
	<link rel="stylesheet" href="css/form-classic.css" />
	<link rel="stylesheet" href="css/coments.css" />
	<link rel="stylesheet" href="css/btn.css" />

	<style type="text/css">
		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-Black.otf") format("opentype");
			font-weight: 900;
			font-style: normal;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-BlackItalic.otf") format("opentype");
			font-weight: 900;
			font-style: italic;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("Sceptica-Bold.otf") format("opentype");
			font-weight: 700;
			font-style: normal;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-BoldItalic.otf") format("opentype");
			font-weight: 700;
			font-style: italic;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-Light.otf") format("opentype");
			font-weight: 300;
			font-style: normal;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-Medium.otf") format("opentype");
			font-weight: 500;
			font-style: normal;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-MediumItalic.otf") format("opentype");
			font-weight: 500;
			font-style: italic;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-Thin.otf") format("opentype");
			font-weight: 200;
			font-style: normal;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-ThinItalic.otf") format("opentype");
			font-weight: 200;
			font-style: italic;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica-Italic.otf") format("opentype");
			font-weight: 400;
			font-style: italic;
		}

		@font-face {
			font-family: "Sceptica";
			src: url("fonts/Sceptica.otf") format("opentype");
			font-weight: 400;
			font-style: normal;
		}

		main h2 {
			font-size: 22px;
			line-height: 1.3;
			margin-bottom: 10px;
		}

		.custom-form {
			max-width: 980px;
			margin: 0 auto;
			padding: 15px;
			box-shadow: 0 0 8px rgb(81 81 81 / 34%);
			border: 1px solid #c51e1e59;
			box-sizing: border-box;
			font-family: Tahoma, Arial, Helvetica, sans-serif !important;
			display: flex;
			flex-direction: column;
			gap: 10px;
			background: rgb(0 0 0 / 3%);
		}

		.custom-form__top-field {
			display: flex;
			gap: 20px;
			align-items: center;
		}

		.custom-form__ava-block {
			position: relative;
			width: 60px;
			height: 60px;
			overflow: hidden;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			border: 1px solid rgb(227 196 196);
			transition: 0.3s;
			flex: 0 0 auto;
		}

		.custom-form__ava-block:hover {
			box-shadow: 0 0 7px 3px rgba(0, 0, 0, 0.2);
		}

		.custom-form__ava-input {
			width: 20px;
			height: 20px;
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1;
			opacity: 0;
			display: none;
		}

		.custom-form__ava-label {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			font-size: 12px;
			text-align: center;
			height: 100%;
			width: 100%;
			line-height: 12px;
			cursor: pointer;
			font-family: inherit;
			font-weight: 100;
		}

		.custom-form__ava-label img {
			border-radius: 50%;
		}

		.custom-form__ava-label_red-text {
			color: red;
			line-height: 4px;
		}

		.custom-form__name {
			width: 100%;
			max-width: 300px;
			display: inline-block;
			outline: none;
			border: 1px solid rgb(134 0 0 / 46%);
			padding: 12px 16px;
			font-size: 14px;
			text-indent: 0;
			height: 43px;
			box-sizing: border-box;
			font-family: inherit;
		}

		.custom-form__message {
			resize: none;
			width: 100%;
			outline: none;
			border: 1px solid rgb(134 0 0 / 46%);
			padding: 10px 12px;
			min-height: 100px;
			text-indent: 0;
			font-size: 14px;
			line-height: unset;
			font-family: inherit;
			box-sizing: border-box;
		}

		.custom-form__bottom-field {
			display: flex;
			flex-direction: column;
			gap: 10px;
		}

		.custom-form__btn {
			width: 100%;
			max-width: 300px;
			outline: none;
			border: none;
			padding: 10px 8px;
			background: #ffffff;
			color: #df0000;
			font-weight: bold;
			font-size: 15px;
			transition: background-color 300ms ease;
			cursor: pointer;
			text-transform: uppercase;
			font-family: inherit;
			border: 1px solid;
			font-family: cnn_sans_display, helveticaneue, Helvetica, Arial, Utkal,
				sans-serif;
			margin-top: 10px;
			text-decoration: none !important;
		}

		.custom-form__btn:hover {
			color: #fff;
			background-color: #df0000;
		}

		.custom-form__photo-block {
			position: relative;
		}

		.custom-form__photo-input {
			width: 20px;
			position: absolute;
			z-index: -1;
			left: 0;
			top: 0;
			display: none;
			opacity: 0;
		}

		.custom-form__photo-label {
			cursor: pointer;
			font-size: 14px;
			font-weight: 100;
			border: none;
			text-decoration: underline;
			color: #3858f5;
			width: 100%;
			max-width: 300px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		@keyframes fade-out {
			0% {
				opacity: 1;
			}

			100% {
				opacity: 0;
				max-height: 0;
			}
		}

		.hidden {
			animation: fade-out 1s ease;
		}

		.comment-from__photo {
			max-width: 300px;
			width: 100%;
			margin-left: 60px;
		}

		@media screen and (max-width: 500px) {
			.comment-from__photo {
				margin-left: auto;
			}
		}

		body input[name="phone"] {
			background-repeat: no-repeat !important;
			background-position: left 15px center !important;
		}

		form input.order__input,
		form select,
		form input.order__input:focus {
			background-color: #fff !important;
			border: 1px #bbb solid !important;
		}

		.doc-block {
			padding: 10px;
			border: 3px #004478 dashed;
			text-align: center;
			max-width: 600px;
			margin: 0 auto;
			margin-bottom: 20px;
		}

		.doc-block p {
			padding-left: 12px;
			padding-right: 12px;
		}

		.rev-block {
			margin-bottom: 20px;
			padding: 16px;
			background: #ffbc0047;
			box-shadow: 2px 2px 9px #0000002b;
			border: 2px solid #f2dda2;
			border-radius: 5px;
		}

		.rev-block font {
			display: block;
			margin-bottom: 16px;
		}

		.block-offer-actions-block {
			padding: 16px;
			border: 1px solid #979797;
			border-top: none;
		}

		.obertk512 {
			font-family: "Sceptica", "Roboto", sans-serif !important;
			display: block;
			box-shadow: 0 0 9px #00000045;
			border: 8px solid #ffffff;
			border-radius: 4px;
			max-width: 700px;
			margin: 0 auto;
			padding-bottom: 0;
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 20px;
			color: #000;
			background-position: center center;
			margin-top: 24px;
			border-radius: 4px;
			width: 100%;
		}

		.obertk512 h1 {
			font-family: "FS Jack Poster", "Roboto", sans-serif;
			line-height: 1.3;
			margin-bottom: 0;
			color: #373737;
			font-size: 18px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			border: 1px solid #8d8d8d;
			padding: 14px 10px;
			font-weight: 400;
			background: #ffbc0047;
		}

		.obertk512 ol {
			padding-left: 22px;
			margin-top: 4px;
		}

		.obertk512 li {
			line-height: 1.2;
		}

		.obertk512 li::marker {
			font-weight: 600;
			color: #33a641;
		}

		.obertk512 li font {
			line-height: 1.28;
			font-family: "Sceptica", "Roboto", sans-serif !important;
			color: #33a641;
			text-align: left;
			font-weight: 500;
		}

		.block-offer-actions-block li span {
			display: block;
			font-size: 16px;
			line-height: 1.2;
			font-weight: 400;
			color: #6c6d6d;
			margin-left: 0px;
			margin-top: 5px;
			margin-bottom: 4px;
			border-bottom: 1px solid #c8c8c8;
			padding-bottom: 16px;
		}

		.receipt-block {
			margin-bottom: 26px;
		}

		.pachino-ramka {
			border: 3px solid #ff7000;
			padding: 14px;
			border-radius: 4px;
			background: #ffa5000a;
		}

		.ramka-title {
			display: block;
			background: #ff4d0021;
			color: #191515;
			padding: 6px 8px;
			margin-bottom: 12px;
			font-weight: 400 !important;
			background: hsla(24, 89%, 82%, 1);
			background: linear-gradient(0deg,
					hsla(24, 89%, 82%, 1) 0%,
					hsla(30, 100%, 99%, 1) 100%);
			background: -moz-linear-gradient(0deg,
					hsla(24, 89%, 82%, 1) 0%,
					hsla(30, 100%, 99%, 1) 100%);
			background: -webkit-linear-gradient(0deg,
					hsla(24, 89%, 82%, 1) 0%,
					hsla(30, 100%, 99%, 1) 100%);
			filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FACAAA", endColorstr="#FFFDFB", GradientType=1);
		}

		.pachino-ramka font {
			color: red;
		}

		.pachino-ramka2 {
			box-shadow: 3px 3px 12px rgb(51 51 51 / 12%);
			text-align: left;
			color: #199751;
			font-weight: 600;
			border: 2px solid;
			border-radius: 4px;
			padding: 15px;
			background: #f8fff973;
		}

		.ramka-title2 {
			display: block;
			background: #166ca72b;
			color: #166ca7f2;
			padding: 2px 8px;
			margin-bottom: 12px;
		}

		.pachino-ramka312 {
			box-shadow: 3px 3px 12px rgb(51 51 51 / 12%);
			text-align: left;
			color: red;
			font-weight: 600;
			border: 2px solid red;
			border-radius: 4px;
			padding: 15px;
			background: #ff000005;
			margin-bottom: 24px;
		}

		/* .pachino-ramka312 .obertka-1 {
			} */

		.pachino-ramka316 {
			box-shadow: 3px 3px 12px rgb(51 51 51 / 13%);
			text-align: left;
			background-color: #3289c282;
			padding: 2px;
			border-radius: 4px;
			font-size: 18px;
			border: 6px solid #3289c2;
			font-weight: 500;
			text-shadow: 0 0 0px #7070705e;
		}

		.pachino-ramka316 .obertka-2 {
			background: #3289c2;
			border: none;
			display: block;
			padding: 12px;
			border-radius: 4px;
			color: #ffffff;
		}

		.pachino-ramka618 {
			box-shadow: 3px 3px 12px rgb(51 51 51 / 13%);
			text-align: left;
			line-height: 1.32;
			background-color: #fe080803;
			padding: 2px;
			border-radius: 4px;
			color: #ff2f00;
			font-size: 19px;
			border: 4px dashed #ffffff;
			font-weight: 500;
			text-shadow: 0 0 0px #8329155e;
		}

		.nowrap {
			text-wrap: nowrap;
		}

		.img-card {
			margin-top: 28px;
			border: 12px solid #fff;
			box-shadow: 3px 2px 9px #00000021;
			border-radius: 4px;
			outline: 1px solid #c4c4c47d;
		}

		.img-card2 {
			border-radius: 4px;
			border: 8px solid #fff;
		}

		.citate {
			color: red;
			font-size: 20px;
			line-height: 1.3;
			margin-bottom: 10px;
		}

		h2 span {
			display: block;
			margin-top: 10px;
			margin-bottom: 20px;
		}

		.pre-cta {
			color: green;
			font-weight: 500;
			font-size: 19px;
		}

		.noclose-cta {
			font-size: 19px;
			max-width: 778px;
			margin: 0 auto;
			display: block;
			margin-bottom: 12px;
		}

		.my-split {
			display: none;
		}

		.redmoon {
			background: red;
			color: lightpink;
		}

		@font-face {
			font-family: "roboto-fixed-line";
			src: url("");
			font-weight: 700;
			font-display: swap;
		}

		* .ffl {
			font-family: PF Regal, PF Regal Text Pro, Georgia, serif !important;
			box-sizing: border-box;
			font-size: 16px;
			line-height: 1.5;
			font-weight: 600;
		}

		@media screen and (min-width: 469px) {
			.ffl {
				display: none !important;
			}
		}

		.ffl {
			position: fixed;
			left: 0;
			bottom: 0;
			z-index: 10;
			background-color: #f14e23;
			text-align: center;
			width: 100%;
			padding: 10px 30px;
			opacity: 0;
			display: none;
			z-index: 99;
			font-family: sans-serif !important;
			font-size: 16px;
			font-weight: 500;
		}

		.ffl__anim {
			-webkit-animation: example 1.3s ease;
			animation: example 1.3s ease;
			opacity: 1;
		}

		@-webkit-keyframes example {
			0% {
				opacity: 0;
			}

			25% {
				opacity: 0;
			}

			50% {
				opacity: 0;
			}

			75% {
				opacity: 0.9;
			}

			100% {
				opacity: 1;
			}
		}

		@keyframes example {
			0% {
				opacity: 0;
			}

			25% {
				opacity: 0;
			}

			50% {
				opacity: 0;
			}

			75% {
				opacity: 0.9;
			}

			100% {
				opacity: 1;
			}
		}

		.ffl__wrap {
			position: relative;
		}

		.ffl__close {
			position: absolute;
			top: 0;
			right: -20px;
			color: #fff;
			font-size: 25px;
			font-family: serif;
			line-height: 16px;
			height: 16px;
			width: 16px;
			cursor: pointer;
			font-weight: 700;
		}

		.ffl__out {
			display: none !important;
		}

		.ffl__text {
			color: #fff;
			text-shadow: 0 0 0 #fff;
		}

		.ffl__price {
			font-size: 16px;
			white-space: nowrap;
		}

		.ffl-new-price {
			font-weight: 600 !important;
			font-size: 17px !important;
		}

		.ffl__price span {
			font-size: 16px;
			text-transform: uppercase;
			font-weight: 500;
		}

		.ffl__btn,
		.ffl__btn:focus,
		.ffl__btn:hover,
		.ffl__btn:active {
			background-color: #ffbe01;
			color: #a12d0f;
			border-radius: 3px;
			padding: 7px 30px;
			display: inline-block;
			margin: 5px auto;
			text-decoration: none;
			-webkit-animation: blinker 2s cubic-bezier(1, 0, 0, 1) infinite;
			animation: blinker 2s cubic-bezier(1, 0, 0, 1) infinite;
			line-height: 1.2;
			text-transform: uppercase;
			font-size: 17px;
			font-weight: 800;
			text-decoration: none !important;
		}

		@keyframes blinker {
			from {
				opacity: 1;
			}

			to {
				opacity: 0.7;
			}
		}

		@-webkit-keyframes blinker {
			from {
				opacity: 1;
			}

			to {
				opacity: 0.7;
			}
		}

		.tolkochto {
			color: green;
			font-weight: 600;
			font-size: 12px;
		}

		@media (min-width: 769px) {
			.bg-image img {
				width: 100%;
				max-width: 1400px;
				height: auto;
			}

			.text-under-image {
				display: block;
				/* Afficher le texte dans le flux normal sur les grands écrans */
				margin-top: 20px;
				/* Définir la marge supérieure pour placer le texte sous l'image */
			}
		}

		/* Pour les écrans de moins de 769 pixels de large */
		@media (max-width: 768px) {
			.bg-image img {
				width: 100%;
				height: auto;
				position: fixed;
				top: 0;
				left: 0;
				z-index: 9999;
			}

			.text-under-image {
				display: block;
				/* Afficher le texte dans le flux normal sur les écrans mobiles */
				margin-top: 100px;
				/* Définir une marge supérieure afin que le texte soit sous l'image */
			}
		}

		header img {
			margin: 0px 0 !important;
			width: 100%;
		}

		.head-one-part {
			color: red;
		}

		.head-two-part {
			margin-top: 3px;
			display: block;
		}

		.head-main-date {
			display: block;
			padding: 0px 14px;
		}

		.head-main-date-title {
			display: block;
			font-style: italic;
		}

		#hdr .head-search-block {
			text-align: right;
			width: fit-content;
			margin-top: 12px;
			float: right;
		}

		.head-link-icons {
			z-index: 999999;
			display: block;
			position: relative;
			margin-left: -3px;
			width: fit-content;
		}

		#hdr .head-search-text {
			color: #2f4f6b;
			font-size: 14px;
			margin-right: 4px;
			margin-top: 4px;
		}

		#hdr .head-lang {
			background: #fff;
			color: #2f4f6b;
			font-style: normal;
			font-weight: 500;
			font-family: sans-serif;
			font-size: 16px;
			box-shadow: 1px 1px 5px #00000029;
			width: 34px;
			height: 34px;
			display: inline-block;
			text-align: center;
			padding-top: 6px;
		}

		#hdr .head-social-and-search-block {
			display: block;
			float: right;
			margin-right: 20px;
			/* margin-top: -6px;*/
		}

		.head-social {
			display: block;
		}

		#hdr .head-logo-and-text-block {
			display: flex;
			justify-content: space-between;
			height: 50px;
			padding: 0 14px;
			align-items: center;
		}

		#new-header {
			margin-left: auto;
			margin-top: -8px;
			margin-right: -10px;
		}

		.mob-hide {
			font-size: 14px;
			margin-right: 5px;
		}

		.head-top-social ul {
			display: flex;
			margin: 12px 0 0 0 !important;
			gap: 6px;
		}

		.head-top-social ul li {
			list-style: none;
		}

		.head-top-social ul li img {
			width: 24px !important;
		}

		.head-link-icons {
			align-items: self-end;
			display: flex;
			margin-top: 56px !important;
			display: block;
		}

		.head-link-icons ul {
			display: flex;
		}

		.head-link-icons ul li {
			list-style: none;
		}

		.head-link-icons ul li img {
			width: 46px !important;
		}

		.head-link-icons a:hover {
			opacity: 0.9;
		}

		.head-top-social a:hover {
			opacity: 0.9;
		}

		.head-lines-block {
			display: flex;
			width: 100%;
			background: #0052a2;
			padding: 8px 0px;
			max-width: 900px;
			margin: 0 auto;
		}

		.line-green,
		.line-white,
		.line-red {
			display: inline-block;
			width: 33.33%;
			height: 6px;
			margin: 0;
			padding: 0;
		}

		.line-green {
			background-color: green;
		}

		.line-white {
			background-color: white;
		}

		.line-red {
			background-color: red;
		}

		#hdr {
			width: 100%;
			box-sizing: border-box;
			max-width: 900px;
			margin: 0 auto;
			background: #edefea;
		}

		.head-two-logo {
			max-width: 94px !important;
		}

		.head-three-logo {
			max-width: 94px !important;
		}

		.top-bar {
			display: flex;
			justify-content: flex-start;
			align-items: center;
			padding: 6px 10px;
			background-color: #f0f0f0;
			width: 100%;
			box-sizing: border-box;
			flex-wrap: wrap;
			max-width: 900px;
			margin: 0 auto;
		}

		.top-bar img {
			width: 100%;
			max-width: 145px;
			height: auto;
			object-fit: contain;
			text-align: left;
			float: left;
			margin: 0;
		}

		@media screen and (max-width: 480px) {
			.top-bar img {
				margin-right: 10px;
			}
		}

		@media screen and (max-width: 414px) {
			.head-search-block {
				display: none;
			}
		}

		@media screen and (max-width: 340px) {
			.top-bar img {
				width: 100%;
				max-width: 110px;
				height: auto;
				object-fit: contain;
				margin-right: 20px;
			}
		}

		#hdr div,
		#hdr span {
			margin: 0;
			padding: 0;
			outline: 0;
			vertical-align: top;
		}

		#hdr * {
			margin: 0;
			padding: 0;
		}

		#hdr2 {
			width: 100%;
			height: 134px;
			background-image: url("");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: right center;
			box-sizing: border-box;
		}

		#hdr2 img {
			width: 100%;
			max-width: 300px;
			height: 100%;
		}

		#hdr2 .head-main-logo {
			width: 72%;
			max-width: 274px;
			height: 66px;
			margin-top: 34px;
		}

		#hdr2 span.header {
			width: 100%;
			margin-top: 37px;
			margin-left: 10px;
			padding: 0px 5px 0 5px;
			float: left;
			text-align: left;
			max-width: 235px;
		}

		#hdr2 div.text {
			font-size: 21px;
			font-weight: bold;
			color: #fafbfc;
			float: left;
			margin-top: 15px;
		}

		#hdr2 img.gerb {
			height: 169px;
			width: 160px;
			float: left;
			display: block;
			background-image: url("");
			background-repeat: no-repeat;
		}

		#hdr span {
			vertical-align: bottom;
		}

		/* new subtitle */
		.main-subtitle {
			display: block;
			padding: 6px 10px;
			color: #1e3651;
			font-size: 18px;
			border-radius: 2px;
			font-weight: 500;
			border: 1px solid #29466645;
			margin-bottom: 16px;
			margin-top: 10px;
			font-style: italic;
			box-shadow: 1px 2px 10px #2946661a;
			background: #ffffff;
			line-height: 1.4;
			font-style: italic;
		}

		/* new subtitle */

		/*start correction footer*/
		@media screen and (max-width: 639px) {

			#footer-section,
			.footer ul li,
			.text-2xl {
				text-align: center !important;
			}

			.footer__link--visible:not(.footer__link--language) {
				width: 100%;
				text-align: center !important;
				display: block !important;
				max-width: 100%;
			}
		}

		.section {
			display: block;
		}

		[class*="span"] {
			float: left;
			min-height: 1px;
			margin-left: 20px;
		}

		.span3 {
			width: 220px;
		}

		.row-fluid {
			width: 100%;
		}

		.row-fluid:before,
		.row-fluid:after {
			display: table;
			line-height: 0;
			content: "";
		}

		.row-fluid:after {
			clear: both;
		}

		.row-fluid [class*="span"] {
			display: block;
			float: left;
			width: 100%;
			min-height: 23px;
			margin-left: 2.127659574468085%;
		}

		.row-fluid [class*="span"]:first-child {
			margin-left: 0;
		}

		.row-fluid .span3 {
			width: 23.404255319148934%;
		}

		#new-header form {
			margin: 0 0 20px;
		}

		#new-header fieldset {
			padding: 0;
			margin: 0;
			border: 0;
		}

		#new-header legend {
			display: block;
			width: 100%;
			padding: 0;
			margin-bottom: 20px;
			font-size: 21px;
			line-height: 40px;
			color: #333333;
			border: 0;
			border-bottom: 1px solid #e5e5e5;
		}

		#new-header label,
		input,
		button {
			font-size: 14px;
			font-weight: normal;
			line-height: 20px;
		}

		#new-header input,
		button {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		}

		#new-header label {
			display: block;
			margin-bottom: 5px;
		}

		#new-header input[type="text"] {
			display: inline-block;
			height: 20px;
			padding: 4px 6px;
			margin-bottom: 9px;
			font-size: 14px;
			line-height: 20px;
			color: #555555;
			min-width: 100px;
		}

		#new-header input {
			width: 206px;
		}

		#new-header input[type="text"] {
			background-color: #ffffff;
			border: 1px solid #cccccc;
		}

		#new-header input[type="text"]:focus {
			outline: 0;
			outline: thin dotted;
		}

		#new-header input {
			margin-left: 0;
		}

		#new-header label {
			font-family: "Trebuchet MS", Arial, Helvetica, Geneva, sans-serif;
			color: #2a2a25;
			font-size: 1.1em;
			line-height: 1.3em;
		}

		#new-header label {
			font-size: 1.1em;
		}

		#new-header div.row-search-container {
			margin-bottom: 20px !important;
		}

		#search-container {
			position: relative;
			z-index: 150;
			max-width: 300px;
		}

		#search-bar input {
			border: 1px solid #909090;
			width: 148px;
			padding-right: 4px;
			padding-left: 5px;
			font-size: 11px;
		}

		#search-bar fieldset {
			border: none;
			display: flex;
		}

		#search-bar button[type="submit"] {
			background-color: #2f4f6b;
			text-transform: lowercase;
			color: #fff;
			border: 0;
			padding-top: 0px;
			padding-bottom: 2px;
			font-weight: normal;
			width: 100%;
			max-width: 48px;
			font-size: 14px;
			font-weight: 500;
			padding-left: 2px;
			padding-right: 2px;
			border-radius: 0 !important;
			cursor: pointer;
		}

		#search-bar button[type="submit"]:active,
		#search-bar button[type="submit"]:focus,
		#search-bar button[type="submit"]:hover {
			background-color: #323232;
		}

		.hidden {
			display: none;
		}

		.aside,
		.figure,
		.header,
		.hgroup,
		.nav,
		.section {
			display: block;
		}

		#new-header a:hover,
		a:active {
			outline: 0;
		}

		#new-header img {
			width: auto;
			height: auto;
			max-width: 100%;
			vertical-align: middle;
			border: 0;
			-ms-interpolation-mode: bicubic;
		}

		#new-header a {
			color: #0088cc;
			text-decoration: none;
		}

		#new-header a:hover {
			color: #005580;
			text-decoration: underline;
		}

		[class*="span"] {
			float: left;
			min-height: 1px;
			margin-left: 20px;
		}

		.row-fluid {
			width: 100%;
		}

		.row-fluid:before,
		.row-fluid:after {
			display: table;
			line-height: 0;
			content: "";
		}

		.row-fluid:after {
			clear: both;
		}

		.row-fluid [class*="span"] {
			display: block;
			float: left;
			width: 100%;
			min-height: 23px;
			margin-left: 2.127659574468085%;
		}

		.row-fluid [class*="span"]:first-child {
			margin-left: 0;
		}

		.span8_ale {
			width: 97% !important;
		}

		.row-fluid .span8_ale {
			width: 100%;
			padding-left: 14px;
			padding-bottom: 3px;
			padding-top: 3px;
		}

		.row-fluid .span8_ale p {
			margin-left: 0;
		}

		.row-fluid .span8_ale #seiin {
			float: left;
			margin-top: 0px;
			margin-right: 10px;
		}

		.row-fluid .span8_ale #crumb {
			float: left;
			width: auto;
		}

		.container-fluid {
			padding-right: 20px;
			padding-left: 20px;
		}

		.container-fluid:before,
		.container-fluid:after {
			display: table;
			line-height: 0;
			content: "";
		}

		.container-fluid:after {
			clear: both;
		}

		#new-header p {
			margin: 0 0 10px;
		}

		#new-header h1 {
			margin: 10px 0;
			font-family: inherit;
			font-weight: bold;
			line-height: 1;
			color: inherit;
		}

		#new-header h1 {
			font-size: 36px;
			line-height: 40px;
		}

		#new-header ul {
			padding: 0;
			margin: 0 0 10px 25px;
		}

		#new-header ul ul {
			margin-bottom: 0;
		}

		#new-header li {
			line-height: 20px;
		}

		.dropdown-toggle:active {
			outline: 0;
		}

		.nav {
			margin-bottom: 20px;
			margin-left: 0;
			list-style: none;
		}

		#new-header p {
			font-family: "Trebuchet MS", Arial, Helvetica, Geneva, sans-serif;
			color: #2a2a25;
			font-size: 1.1em;
			line-height: 1.3em;
		}

		#new-header p {
			font-size: 1.1em;
		}

		#new-header a {
			color: #9f0038;
			font-weight: bold;
			font-size: 1em;
		}

		#new-header a:hover {
			color: #9f0038;
		}

		#new-header a:focus {
			outline-color: #8aaebe;
		}

		#header>div {
			margin-top: -42px;
			position: relative;
		}

		.row-menu {
			border-bottom: 3px solid #dcdbc1;
			height: 63px;
			background: #ffffff url("") no-repeat left top;
			position: relative;
			z-index: 110;
		}

		#header #service-menu {
			position: absolute;
			top: -6px;
			right: 0;
			z-index: 10;
			max-width: 226px;
		}

		#service-menu ul {
			float: right;
			margin-top: 71px;
			margin-right: 15px;
			line-height: 0.4;
		}

		#service-menu ul li a {
			font-size: 13px;
			color: #000000;
			padding: 2px 4px 1px 5px;
		}

		#service-menu ul li:first-child a {
			border: 0;
		}

		#service-menu ul li a:focus,
		#service-menu ul li a:active,
		#service-menu ul li a:hover {
			color: #424242;
		}

		#idOnMO {
			position: relative;
			z-index: 101;
		}

		.row-banner .figure {
			border-top: 3px solid #fff;
			height: 260px;
			display: block;
			overflow: hidden !important;
			background-color: #fff;
		}

		.row-banner img {
			z-index: 1;
			position: relative;
			top: 0;
			display: block;
		}

		#io-non-fumero-mai a,
		#io-non-fumero-mai a:hover,
		#io-non-fumero-mai a:focus,
		#io-non-fumero-mai a:active {
			z-index: 100;
			text-indent: -9999px;
			top: 230px;
			right: 40px;
			width: 631px;
			height: 74px;
			background: transparent url("") no-repeat left top;
		}

		#header .aside p,
		#header .aside ul,
		#header .aside li {
			display: inline-block;
			font-size: 14px;
		}

		#header .aside a,
		#header .aside p {
			font-size: 12px;
		}

		#header .aside {
			background-color: #1b1b1a;
			color: #fff;
			border-bottom: 1px solid #fff;
			position: relative;
			top: 1px;
			z-index: 0;
			margin-top: 0px;
		}

		.breadcrumbs p {
			color: #fff;
			margin-left: 15px;
			margin-bottom: 2px;
		}

		.breadcrumbs p,
		.breadcrumbs ul {
			margin-top: 3px;
		}

		.breadcrumbs a {
			color: #fff;
			font-weight: bold;
		}

		.breadcrumbs a:active,
		.breadcrumbs a:focus,
		.breadcrumbs a:hover {
			color: #fff;
		}

		.nav ul {
			margin: 0;
			padding: 0;
		}

		.nav li {
			list-style: none;
			display: inline-block;
			margin-bottom: 0;
			line-height: 0.7;
		}

		#navigation {
			z-index: 100;
			position: relative;
			width: auto;
			padding-left: 1px;
			padding-right: 1px;
			font-size: 14px;
		}

		#header {
			position: relative;
			z-index: 52;
			margin-top: 28px;
		}

		#navigation li {
			line-height: 14px;
		}

		#navigation li li li {
			height: 22px;
			width: 100%;
		}

		#navigation li li ul.twocols li {
			height: 22px;
			width: 50% !important;
		}

		#navigation>ul {
			display: inline;
			width: 100%;
		}

		#navigation>ul>li {
			display: block;
			position: relative;
			float: left;
			width: fit-content;
			border-radius: 0 !important;
			margin-bottom: 0;
		}

		#ministro {
			margin-left: 0px;
		}

		#navigation>ul>#menu-salute {
			background: #f1f1f1 url("") no-repeat left top;
			z-index: 3;
		}

		#navigation>ul>#menu-salute>a {
			outline: 1px solid #3c94bc;
		}

		#navigation>ul>#temi {
			background: #f1f1f1 url("") no-repeat left top;
			z-index: 2;
		}

		#navigation>ul>#temi>a {
			outline: 1px solid #6fad24;
		}

		#navigation>ul>#news {
			background: #f1f1f1 url("") no-repeat left top;
			z-index: 1;
		}

		#navigation>ul>#news>a {
			outline: 1px solid #f48c05;
		}

		#navigation>ul>#ministro {
			background: #f1f1f1 url("") no-repeat left top;
			z-index: 0;
		}

		#navigation>ul>#ministro>a {
			outline: 1px solid #d87999;
		}

		#navigation>ul>li>a {
			display: block;
			padding: 15px 0 13px 44px;
			background: transparent url("") no-repeat left top;
			height: 45px;
			font-size: 1.4em;
			font-weight: bold;
			color: #3a3a32;
		}

		#navigation>ul>#menu-salute:hover,
		#navigation>ul>#ministro:hover,
		#navigation>ul>#news:hover,
		#navigation>ul>#temi:hover {
			background-position: left bottom;
		}

		#navigation>ul>li:hover>a,
		#navigation>ul>li.active>a {
			color: #3a3a32;
			text-decoration: none;
		}

		#navigation>ul>li>a.menu-item-salute {
			background-position: 0 -247px;
		}

		#navigation>ul>li:hover>a.menu-item-salute {
			background-position: 0 -7px;
		}

		#navigation>ul>li>a.menu-item-temi {
			background-position: 0 -307px;
		}

		#navigation>ul>li:hover>a.menu-item-temi {
			background-position: 0 -67px;
		}

		#navigation>ul>li>a.menu-item-news {
			background-position: 0 -367px;
		}

		#navigation>ul>li:hover>a.menu-item-news {
			background-position: 0 -127px;
		}

		#navigation>ul>li>a.menu-item-ministro {
			background-position: 0 -427px;
		}

		#navigation>ul>li:hover>a.menu-item-ministro,
		#navigation>ul>li.active>a.menu-item-ministro {
			background-position: 0 -187px;
		}

		ul.level-2 {
			position: absolute;
			top: 46px !important;
			background: none;
			border: none;
			display: none;
		}

		#ministro ul.level-2 {
			left: -1px !important;
		}

		ul.level-3 {
			display: none;
		}

		.active>ul.level-2,
		.active>ul.level-3 {
			display: block;
		}

		li {
			display: list-item;
		}

		#ministro>.level-2>li>a:hover {
			background-color: #e7b7c7;
			border-radius: 0 !important;
		}

		#ministro>.level-2>.final-link.active>a {
			background-color: #a41648;
			font-weight: bold;
			color: #fff;
		}

		.level-2 li>ul {
			padding: 0;
			width: 280px;
			border-radius: 0px !important;
		}

		.level-2 li>ul.twocols {
			width: 444px;
		}

		.level-3 li {
			margin: 12px 0 0;
			float: left;
		}

		.level-3 li>a {
			display: block;
			color: #3a3a32;
			width: 100%;
			padding: 2px 11px;
			text-align: left;
		}

		#ministro .level-3 li>a:hover {
			background-color: #e7b7c7;
			color: #3a3a32 !important;
			border-radius: 0 !important;
		}

		#ministro .final-link.active>a {
			background-color: #a41648;
			color: #ffffff !important;
			border-radius: 0 !important;
		}

		#ministro .final-link.active>a {
			background-color: #a41648;
			color: #ffffff !important;
		}

		.logo {
			width: 100%;
			max-width: 349px;
			position: absolute;
			left: 9px;
			top: -17px;
		}

		.figure {
			padding: 0;
			margin: 0;
		}

		img {
			width: 100%;
			height: auto;
		}

		.container-fluid {
			height: auto;
		}

		#header>div>.row-fluid {
			width: auto;
		}

		img.no_border_margin {
			border: 0;
			width: auto;
			height: auto;
			margin-bottom: 5px;
			max-width: none !important;
		}

		.level-3 li>a {
			display: block;
			color: #3a3a32;
			width: 90%;
			height: 29px;
			margin-top: -1px;
			padding: 2px 11px 0px;
		}

		.bar_navigation_img {
			width: auto !important;
		}

		.rotator_display {
			display: block;
		}

		.rotator_display_none {
			display: none;
		}

		.pagination_banner {
			float: right;
			position: relative;
			right: 40px;
		}

		.pagination_banner>ul>li {
			float: left;
			margin-left: 10px;
		}

		.pag_ban {
			height: 13px;
			position: absolute;
			top: 235px;
		}

		a.evidenziaElementi:focus {
			outline: none !important;
		}

		.padding-new-soc {
			padding-left: 7px;
			padding-right: 7px;
		}

		@media screen and (max-width: 639px) {
			footer .mb-6 {
				text-align: center;
			}

			.footer__link {
				min-width: 100%;
			}
		}

		@media screen and (max-width: 468px) {
			.mob-hide {
				display: none !important;
			}

			#service-menu ul {
				margin-right: 15px;
				line-height: 0;
				margin-top: 75px;
			}

			#service-menu ul li a {
				padding: 0;
			}

			#header #service-menu {
				max-width: 139px;
			}
		}

		@media screen and (max-width: 410px) {
			#search-container {
				max-width: 236px;
			}

			#search-bar button[type="submit"] {
				font-size: 15px;
			}
		}

		@media screen and (max-width: 350px) {
			#service-menu {
				display: none;
			}
		}

		.h1-bg {
			position: relative;
			background: #fdf0b087;
			padding: 20px;
			padding-left: 6px;
			padding-right: 6px;
			padding-bottom: 4px;
			max-width: 900px;
			margin: 0 auto;
			/* width: 96%; */
			margin-bottom: 22px;
		}

		.h1-bg::before {
			position: absolute;
			content: "";
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			/*background-color: rgba(255, 255, 255, 0.454);*/
		}

		.title_h1 {
			position: relative;
			background-color: rgb(255 255 255 / 0%);
			border-radius: 5px;
			padding: 10px 14px;
			font-style: normal;
			border-bottom: 2px solid;
			border-bottom-left-radius: 0;
			border-bottom-right-radius: 0;
			color: #3d3d3df5;
			display: block;
			padding-top: 24px;
		}

		.recept {
			background: #d8d8d8;
			padding: 10px 18px;
			box-shadow: 1px 1px 11px 0 #00000024;
			border-radius: 4px;
			border: 3px solid white;
			margin-bottom: 26px;
		}

		.my-ul-0-green {
			margin-left: 0;
		}

		.my-ul-0-green li {
			position: relative;
			display: list-item;
			padding-left: 24px;
			margin-bottom: 7px;
			list-style: none;
			line-height: 1.2;
		}

		.my-ul-0-green li:before {
			content: "—";
			position: absolute;
			top: 0;
			left: 0;
			color: #1ba023;
			font-size: 18px;
			line-height: 1.5;
			font-weight: 600;
		}

		.my-ul-0-green font {
			font-size: 16px;
			display: block;
			margin-bottom: 8px;
		}

		.table-block {
			font-family: "Sceptica", "Roboto", sans-serif !important;
			display: block;
			box-shadow: 0 0 9px #00000045;
			border: 8px solid #ffffff;
			border: 8px solid #ffffff;
			border-radius: 4px;
			max-width: 548px;
			margin: 0 auto;
			padding-bottom: 0;
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 20px;
			color: #000;
			background-position: center center;
			margin-top: 24px;
			width: 100%;
		}

		.table-title-block {
			padding: 14px;
		}

		.table-block h1 {
			font-family: "FS Jack Poster", "Roboto", sans-serif;
			line-height: 1.3;
			margin-bottom: 0;
			color: #373737;
			font-size: 18px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			border: 1px solid #8d8d8d;
			padding: 14px 10px;
			border-bottom: 0;
			font-weight: 400;
			background: #ffbc0047;
		}

		@media print {
			.table {
				display: table;
			}

			table {
				width: 100%;
				color: #32313a;
				border-radius: 5px;
				border-collapse: collapse;
				border-spacing: 0;
				line-height: 23px;
				margin: 40px 0;
			}
		}

		@media print {
			.table {
				display: table;
			}

			table {
				width: 100%;
				color: #32313a;
				border-radius: 5px;
				border-collapse: collapse;
				border-spacing: 0;
				line-height: 23px;
				margin: 40px 0;
			}
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		@media print {
			.table {
				border-collapse: collapse !important;
			}
		}

		table {
			background-color: transparent;
		}

		.table {
			width: 100%;
			max-width: 100%;
			margin-bottom: 0;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		table,
		tbody,
		td,
		th,
		tr {
			border: 0;
			font-size: 100%;
			font: inherit;
			margin: 0;
			padding: 0;
			vertical-align: baseline;
		}

		table {
			border-collapse: collapse;
			border-spacing: 0;
		}

		.table {
			font-family: Roboto, sans-serif;
			margin-bottom: 0;
			border-collapse: separate;
			border-spacing: 0;
			border-radius: 4px !important;
			overflow: hidden;
			border: 0px solid black;
		}

		td,
		th {
			border: 0.1px solid black !important;
		}

		.table th {
			background-color: #2c5aa0;
			color: #fff;
		}

		.table td,
		.table th {
			border: 1px solid #000;
			padding: 5px 10px;
			text-align: center;
			font-size: 1.1rem;
			vertical-align: middle;
			font-size: 16px;
		}

		.table td {
			background: none !important;
		}

		.table td.one {
			text-align: left;
			width: 100%;
			font-size: 17px;
			font-weight: 400;
			border-radius: 0;
			color: #093640;
		}

		.table td.two {
			font-size: 20px;
			font-family: "Sceptica", "Roboto", sans-serif !important;
			color: #33a641;
			text-align: left;
			font-weight: 500;
		}

		@media screen and (max-width: 992px) {
			.table {
				font-size: 18px;
			}
		}

		@media screen and (max-width: 460px) {
			.table {
				font-size: 16px;
			}
		}

		/*footer logo and date*/
		.stat-footer {
			display: flex;
			flex-wrap: nowrap;
			justify-content: space-between;
			align-items: center;
			width: 100%;
			padding-left: 10px;
			box-sizing: border-box;
			overflow: visible;
			margin-top: 15px;
			margin-bottom: 14px;
		}

		.stat-footer-logo {
			max-width: 190px;
			width: 87%;
			height: auto;
			flex-shrink: 0;
			margin: 0;
		}

		.stat-footer-banner {
			display: block;
			align-items: center;
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 15px;
			text-decoration: none;
			padding-right: 15px;
			min-width: 164px;
			white-space: nowrap;
			text-align: right;
			flex-shrink: 1;
			max-width: 100%;
			box-sizing: border-box;
			position: relative;
			overflow: visible;
			z-index: 99;
		}

		.stat-footer-banner a {
			color: #7a7a7ab5;
			text-decoration: none;
			padding-top: 8px;
		}

		@media (max-width: 468px) {
			.stat-footer-logo {
				max-width: 160px;
				width: 47%;
			}

			.stat-footer-banner {
				font-size: 13px;
				min-width: 139px;
			}
		}

		@media (max-width: 408px) {
			.stat-footer-banner {
				font-size: 11px;
				min-width: 119px;
			}
		}

		@media (max-width: 768px) {
			.stat-footer-logo {
				max-width: 170px;
				width: 57%;
			}
		}

		table-unique1,
		tbody-unique1,
		td-unique1,
		th-unique1,
		tr-unique1 {
			border: 0;
			font-size: 100%;
			font: inherit;
			margin: 0;
			padding: 0;
			vertical-align: baseline;
		}

		.table-unique1 {
			font-family: Roboto, sans-serif;
			margin-bottom: 15px;
			margin-top: 24px;
			border-collapse: separate;
			border-spacing: 0;
			border-radius: 4px !important;
			overflow: hidden;
			border: 0px solid black;
		}

		.table-unique1 td,
		.table-unique1 th {
			border: 1px solid #000;
			padding: 5px 10px;
			text-align: center;
			font-size: 1.1rem;
			vertical-align: middle;
			font-size: 16px;
		}

		.table-unique1 th {
			background-color: rgb(255, 216, 145);
		}

		.table-unique1 td.disease-unique1 {
			text-align: left;
		}

		@media screen and (max-width: 992px) {
			.table-unique1 {
				font-size: 18px;
			}
		}

		@media screen and (max-width: 460px) {
			.table-unique1 {
				font-size: 16px;
			}
		}

		.issled-title {
			font-size: 15px !important;
			line-height: 1.25 !important;
			display: block;
			margin-top: 7px;
			margin-bottom: 7px;
			color: red;
		}

		.issled-h4 {
			font-size: 18px !important;
			margin-bottom: 0;
		}

		.back-result-point {
			width: 100%;
			background: #a2a2a28f;
			border: 1px solid #adadad;
			margin-bottom: 5px;
		}

		#popup3 h2 {
			padding-left: 14px;
			padding-right: 14px;
			font-size: 24px;
			text-align: center;
		}

		#overlay {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 100;
			opacity: 0;
			transition: opacity 0.3s ease;
		}

		#popup3 {
			z-index: 9999;
			background-image: url("formbg-nobord.jpg");
			background-size: cover;
			background-position: center;
			display: none;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 20px;
			background-color: white;
			box-shadow: 0px 0px 10px rgb(0 0 0 / 50%);
			z-index: 101;
			opacity: 0;
			transform: translate(-50%, -50%) scale(0.8);
			transition: opacity 0.3s ease, transform 0.3s ease;
			max-width: 800px;
			width: 93%;
			height: 87%;
			overflow-y: auto;
			max-height: 100vh;
		}

		#closePopup {
			float: right;
			position: absolute;
			right: 10px;
			top: 10px;
			cursor: pointer;
		}

		#pagination {
			text-align: center;
		}

		@media (max-width: 576px) {
			.ul-sostav li {
				font-size: 16px !important;
			}
		}

		#pagination button {
			color: #254da1;
			padding: 5px;
			border: 1px solid #254da1;
			margin-left: 5px;
			margin-right: 5px;
			border-radius: 1px;
			font-weight: 500;
			cursor: pointer;
			transition: 0.2s;
			background: rgb(15 0 162 / 5%);
			font-family: sans-serif;
			font-size: 13px;
		}

		#pagination button:hover {
			color: #fff;
			background: #254da1;
			transition: 0.2s;
		}

		#pagination button:active {
			color: #fff;
			background: #254da1;
			transition: 0.2s;
		}

		.ul-sostav {
			padding-left: unset;
			text-align: left;
			list-style: auto;
			width: 80%;
			max-width: 344px;
			margin: 0 auto;
			margin-bottom: 20px;
		}

		@media all {
			.elementor-kit-5554 h3 {
				font-family: "Arial", Sans-serif;
				font-size: 18px;
			}
		}

		.graph {
			width: 100%;
			position: relative;
			max-width: 800px;
			margin: 0 auto;
		}

		.graph .txt {
			position: relative;
			text-align: left;
			color: #fff;
			padding: 0;
			border-radius: 1px;
			margin-bottom: 2px;
			width: fit-content;
			font-size: 14px;
			padding: 2px 5px;
		}

		.graph .beforetxt {
			color: #070707 !important;
			font-weight: 500;
			padding: 0 !important;
			font-size: 14px !important;
		}

		.graph .beforetxt span {
			text-align: left;
			display: block;
			padding: 0;
		}

		.graph .txt span {
			text-align: left;
			display: block;
			padding: 5px 10px;
		}

		.graph .txt {
			background: #5095c5;
			margin-bottom: 0;
		}

		.graph .txt {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: justify;
			-ms-flex-pack: justify;
			justify-content: space-between;
			color: #fff;
		}

		.graph {
			width: 100%;
			position: relative;
			padding: 0;
			max-width: 800px;
			margin: 0 auto;
		}

		.graph-title {
			text-align: center;
		}

		#content h3 {
			font-size: 24px;
			line-height: 36px;
			margin-top: 18px;
			padding-left: 0;
		}

		.percent {
			text-wrap: nowrap;
		}

		@media all {
			.pachinoform input::placeholder {
				font-size: 15px !important;
			}

			.pachinoform input {
				font-size: 14px;
			}
		}

		.pachinoform {
			padding: 10px;
			font-size: 20px;
			line-height: 1.5;
			margin-bottom: 20px;
			color: #000;
			border: 6px solid #166ca7;
			background-color: #fff;
			background-image: url("181eba6c5b17e59936214f76fd7ee22fa509e932.svg");
			background-position: center center;
			display: flex;
			flex-direction: column;
			align-content: center;
			flex-wrap: wrap;
			border-radius: 10px;
			width: 100%;
			max-width: 781px;
			margin: 0 auto;
			margin-top: 18px;
			margin-bottom: 18px;
		}

		.pachinoform p {
			margin: 0;
			padding: 0;
		}

		.pachinoform_title {
			display: flex;
			gap: 30px;
			max-width: 400px;
			align-self: center;
			text-align: center;
		}

		.pachinoform_title_logo {
			flex-shrink: 0;
		}

		.pachinoform_title_text {
			align-self: center;
		}

		.pachinoform_title_text>b {
			display: block;
		}

		.pachinoform_order {
			max-width: 600px;
			font-weight: bold;
			font-size: 16px;
			list-style: 1.4;
			margin: 15px 0;
			text-align: center;
		}

		.pachinoform_order>b {
			color: #ed1b24;
		}

		.pachinoform_footer {
			text-align: center;
			color: #000;
			font-size: 14px;
			margin: 10px 0;
		}

		.pachinoform_footer>img {
			margin-top: 10px;
		}

		.pachinoform_value {
			display: flex;
			color: #166ca7;
			font-weight: bold;
			font-size: 20px;
			align-items: center;
			align-self: center;
		}

		.pachinoform_value_current {
			border: 1px solid #000;
			color: #ff5858;
			line-height: 1;
			font-size: 24px;
			padding: 5px 20px;
			margin: 0 15px;
		}

		.pachinoform_value_total {
			font-size: 24px;
		}

		.pachinoform_price {
			display: flex;
			align-items: center;
			align-self: center;
			gap: 30px;
			margin-top: 30px;
		}

		.pachinoform_price_old span {
			display: block;
			font-size: 30px;
			font-weight: 700;
			letter-spacing: -1px;
			color: #000;
			position: relative;
			line-height: 1;
		}

		.pachinoform_price_old span:before {
			position: absolute;
			content: "";
			left: 0;
			top: 45%;
			right: 0;
			border-top: 4px solid #ed1b24;
			transform: rotate(-15deg);
		}

		.pachinoform_price_new span {
			display: block;
			background-color: #ed1b24;
			color: #fff;
			text-shadow: 2px 2px 0 #000;
			font-size: 44px;
			padding: 5px 15px;
			font-weight: 700;
			line-height: 1;
		}

		@media (max-width: 500px) {
			.pachinoform_title {
				gap: 5px;
			}

			.pachinoform_title_text {
				font-size: 16px;
			}

			.pachinoform_value {
				flex-wrap: wrap;
				justify-content: center;
			}
		}

		.pachinoform .name-input,
		.pachinoform .phone-input {
			color: #000;
			font-size: 20px;
			margin-bottom: 10px;
		}

		.pachinoform .name-input label,
		.pachinoform .phone-input label {
			font-weight: bold;
			margin-top: 10px;
		}

		.pachinoform .name-input input,
		.pachinoform .phone-input input {
			padding: 0px 20px !important;
			max-width: 300px;
			border: 0;
			padding: 0;
			font: inherit;
			color: inherit;
			box-sizing: border-box;
			width: 100%;
			border-radius: 5px;
			min-width: 100px;
			background: #fff;
			border: 2px solid #68beff;
			padding-left: 24px;
			font-size: 20px !important;
		}

		.pachinoform .button-submit:focus,
		.pachinoform input:focus {
			outline: 0;
			box-shadow: 0 0 0 3px #b2af42a6;
		}

		.pachinoform .button-submit {
			text-align: center;
			width: 100%;
			margin: 0 auto;
			text-decoration: none;
			border-radius: 10px;
			color: #fff;
			border: 2px solid #ffc9c9;
			padding: 14px 0px !important;
			cursor: pointer;
			background: #ff0d17;
			font-size: 18px;
			line-height: 1.4;
			font-weight: bold;
		}

		.pachinoform .button-submit:hover {
			background: #bf080f;
			transition: 0.2s;
		}

		.pachinoform ::placeholder {
			color: #000;
			opacity: 1;
			font-size: 16px;
		}

		@media screen and (max-width: 500px) {
			.blc-pck {
				display: block;
				width: 100%;
				text-align: center;
				margin-top: 10px;
			}

			.pachinoform_value_current {
				margin: 0;
			}
		}
	</style>
</head>

<body>
	<header>
		<div class="bg-image">
			<center>
				<a href="#">
					<picture>
						<source media="(max-width: 768px)" srcset="images/headerm.jpg" />
						<img src="images/header.jpg" alt="Image" />
					</picture>
				</a>
			</center>
		</div>
	</header>
	<div class="h1-bg" style="background: #bdfaff">
		<h1 class="title_h1">
			<span class="head-one-part">La vérité choquante :</span>
			<span class="head-two-part">N'ignorez pas la fatigue due au diabète ! Chez 4 personnes sur 5, c'est
				le signe d'une insuffisance rénale cachée qui conduit à une défaillance
				rénale et à la mort en 1–2 ans !</span>
		</h1>
		<div class="tdate head-main-date">
			<span class="head-main-date-title">Publié le : </span>
			<span class="startdate"><span offset="-3" class="alx-date"></span>, 09:36</span>
		</div>
		<div class="main-subtitle">
			« Comment la nouvelle méthode conçue par le professeur Dishlod Tursunov élimine
			les pics de glycémie, restaure complètement le pancréas, régénère les récepteurs
			de l'insuline et protège les organes des lésions provoquées par le glucose —
			désormais en Ouzbékistan »
		</div>
	</div>

	<div class="title_block_lead"></div>
	<main>
		<img src="images/pic-1-3.jpg" alt="" style="margin-bottom: 14px; margin-top: 0" class="" />
		<p>
			En Ouzbékistan, le nombre de patients confrontés à de graves complications
			du diabète augmente rapidement. La fatigue, longtemps considérée comme un
			« symptôme banal du diabète », est en réalité un signe majeur de lésions
			rénales occultes menant à l'insuffisance rénale et à une mort rapide. C'est
			la réalité de ceux qui ne prennent pas conscience du danger à temps.
		</p>
		<p>
			Le professeur Dishlod Tursunov a relevé ce défi, consacrant toute sa vie à
			la lutte contre le diabète et ses complications. Parmi ses patients, on
			compte des personnes ordinaires comme des célébrités d'Ouzbékistan, de
			France, d'Allemagne et même des États‑Unis.
		</p>
		<p>
			Le professeur donne rarement des interviews, préférant consacrer tout son
			temps aux patients et au développement de nouvelles approches thérapeutiques.
			Nous avons toutefois appris l'existence de sa toute dernière méthode, qui
			change l'approche du traitement du diabète, élimine les fluctuations de la
			glycémie et protège efficacement les organes des dommages causés par le glucose.
		</p>
		<div class="doc-block">
			<img class="" id="epic" src="images/Dishlod1.jpg" />
			<p>
				Dishlod Tursunov : « En <span class="nowyear">2025</span>, nous faisons
				face à une nouvelle vague de complications diabétiques, en particulier
				rénales. Le problème, c'est qu'elles ne se manifestent pas avant le
				moment des lésions irréversibles et du décès. C'est précisément pour cela
				que nous avons mis au point cette méthode —
				<b>le moyen le plus efficace de traiter le diabète et de protéger les
					organes de l'effet oxydant du glucose</b>. »
			</p>
			<p>
				<b>Notre objectif est d'arrêter l'oxydation des organes, d'enclencher la
					régénération des récepteurs de l'insuline — nous rendrons aux cellules
					une sensibilité à l'insuline de <span class="red-txt">98,7 %</span>,
					<span class="red-txt">et votre corps pourra à nouveau contrôler spontanément la glycémie</span></b>
			</p>
		</div>
		<p>
			Le docteur Dishlod Tursunov est convaincu que chacun peut se débarrasser des
			pics de glycémie et de la destruction des organes liée au diabète en
			restaurant les cellules qui produisent l'insuline — et tout cela peut se
			faire à la maison ! Sans injections, sans comprimés, sans contrôle
			quotidien de la glycémie et sans cliniques coûteuses.
		</p>
		<p>
			Contrairement aux médicaments de pharmacie, qui font souvent plus de mal
			que de bien, sa méthode repose sur des mécanismes naturels de
			restauration de la production d'insuline et de la sensibilité cellulaire — sans
			produits chimiques ni hormones.
		</p>
		<h2 class="">
			La metformine et l'insuline ne soignent pas le diabète : ce n'est qu'un piège !<br />
			Les hypoglycémiants tuent plus vite que le diabète lui‑même et les sucreries !
		</h2>
		<p><b>Dishlod Tursunov :</b></p>
		<p>
			— Croyez‑vous vraiment que l'insuline et la metformine guérissent le diabète ? C'est
			une dangereuse illusion. Elles ne font que soulager temporairement les symptômes
			et n'éliminent en rien la cause du diabète. Plus vous les prenez, moins les
			récepteurs répondent au glucose sans médicaments. Vous détruisez votre
			corps sans même vous en rendre compte.
		</p>
		<p>
			Tout le monde sait que le glucose détruit les organes et les tissus, mais les reins
			souffrent le plus. Toutefois, en raison de l'absence de fibres nerveuses douloureuses
			dans les reins, le patient ne ressent pas le problème avant qu'il ne soit trop tard.
			Et les hypoglycémiants accélèrent la dégradation rénale, augmentant le risque de
			complications et de décès de 7 à 15 fois.
		</p>
		<p>
			Regardez cette image : ce sont les reins d'un patient chez qui le diabète a été
			diagnostiqué il y a seulement 2 ans. Mais les reins sont déjà complètement détruits.
			On pensait autrefois que l'insuffisance rénale ne se développait qu'aux stades
			avancés du diabète, mais elle est désormais de plus en plus fréquente même chez les
			personnes en prédiabète. C'est pourquoi il est essentiel de surveiller les symptômes
			dès le début — sinon la mort peut survenir à tout moment.
		</p>
		<figure>
			<img src="images/pic4-2.jpg" class="img-card" />
			<figcaption>
				Reins d'un patient de 44 ans chez qui le diabète ne faisait que commencer,
				mais qui présentait déjà de graves lésions dues au glucose. Tout a commencé
				par une légère fatigue et un malaise général, mais en un mois une insuffisance
				rénale aiguë s'est développée, conduisant au décès.
			</figcaption>
		</figure>
		<div class="pachino-ramka312-block">
			<p class="pachino-ramka312">
				<span class="obertka-1">
					La fatigue chronique et la faiblesse chez presque 100 % des diabétiques
					indiquent une oxydation sévère des organes par le glucose. Les reins
					souffrent le plus — en l'absence de nerfs douloureux, les lésions surviennent
					en secret, détruisant les tissus et tuant le patient.
				</span>
			</p>
		</div>
		<p>
			— Pensez : toutes les quelques semaines de destruction des tissus peuvent devenir
			inversibles, et alors le traitement ne sera plus utile !
			<b class="red-txt">Les reins ne pourront pas se régénérer !</b>
			<b>Et vous n'aurez plus le choix, que de mourir — ou au meilleur des cas
				toute votre vie dépendre de la dialyse !</b>
		</p>
		<h2>
			L'ignorance de ces signaux préoccupants conduit à des complications graves
			du diabète. Si vous avez un taux de sucre élevé dans le sang — vous risquez
			d'être invalidé ou de mourir.
		</h2>
		<p>
			— Si vous ignorez les premiers signes de destruction du glucose, cela pourrait
			vous coûter la vie. Seulement pour
			<span class="startdate" format="year" daysago="200">2024</span> année en
			Ouzbékistan, plus de 170 000 diabétiques ont reçu le diagnostic « insuffisance rénale aiguë », et 60 000 d'entre eux n'ont pas survécu
			<span class="nowyear">2025</span>. Combien de temps vous reste-t-il ? La réponse dépend de combien de temps vous continuerez à ignorer les symptômes.
		</p>
		<p>
			<b>Et si les organes internes et les tissus commencent à pourrir — aucun traitement
				ne sera plus utile. Tout autant que les médicaments de pharmacie habituels.</b>
		</p>
		<h3>Voici les symptômes les plus évidents de ma pratique :</h3>
		<ul>
			<li>Fatigue chronique, même à un niveau normal de sucre</li>
			<li>Faiblesse le matin, difficulté à se déplacer</li>
			<li>Œdèmes matinaux, traces sur les pieds, bourrelets sous les yeux</li>
			<li>Sauts de pression, vertige sans raison</li>
			<li>Sécheresse à la bouche, soif même après avoir bu</li>
			<li>Fréquence des urines</li>
			<li>Douleurs à la colonne vertébrale, sensation de pression dans le bas du dos</li>
			<li>Nauseas, amertume à la bouche</li>
			<li>Tremblements nocturnes, paralysie des doigts</li>
			<li>Urine trouble, changement de couleur de l'urine</li>
		</ul>
		<p>
			Le glucose détruit tous les organes et les tissus. Faites attention aux symptômes,
			avant que le sucre à haut niveau dans le sang ne commence à provoquer des complications graves.
			Voici ce qui se passe avec ceux qui ignorent les signaux de leur corps :
			<b class="red-txt">insuffisance rénale, paralysie, nécrose des tissus, amputation
				des extrémités, cécité, infarctus, accident vasculaire cérébral et mort subite</b>
			— ne vous attendez pas à ce que ce soit trop tard !
		</p>
		<p>
			Regardez ces photographies — voici ce qui se passe avec ceux qui ne
			donnent pas attention à leur état. Avez-vous vraiment envie de cette
			destinée ?
		</p>
		<figure class="cap-bold" style="max-width: 1000px; width: 100%">
			<img src="images/bad51.png" class="img-card" />
			<figcaption>
				Un homme, âgé de 33 ans. Névrite diabétique. Lésion nerveuse sévère. Une petite blessure pendant 2 mois s'est transformée en une grosse
				excroissance généreuse.
			</figcaption>
		</figure>
		<figure class="cap-bold" style="max-width: 1000px; width: 100%">
			<img src="images/bad-2-2.jpg" class="img-card" />
			<figcaption>
				Une femme, âgée de 47 ans. Cécité complète à cause de la néphropathie diabétique.
				Le traitement par l'insuline et les médicaments n'a que détérioré l'état.
			</figcaption>
		</figure>
		<figure class="cap-bold" style="max-width: 1000px; width: 100%">
			<img src="images/bad-516.jpg" class="img-card" />
			<figcaption>
				Une citoyenne d'Ouzbékistan, âgée de 46 ans. Elle a perdu conscience et est tombée dans le coma à cause d'une hyperglycémie, provoquée par une œdème cérébral aiguë. Elle a été transférée dans un service de réanimation, et est décédée après 2,5 mois sur un appareil de ventilation mécanique.
			</figcaption>
		</figure>
		<div class="pachino-ramka312-block">
			<p class="pachino-ramka312">
				<span class="obertka-1">
					Les variations du niveau de sucre dans le sang détruisent les tissus des organes
					et les vaisseaux. Chaque mois, des dizaines de milliers de personnes en Ouzbékistan meurent ou deviennent invalides en raison des complications du diabète, sans avoir reçu de traitement. Les lésions dues au sucre ne guérissent pas toutes seules — commencez
					à agir maintenant, avant que ce ne soit trop tard !
				</span>
			</p>
		</div>
		<p><b>Dislo Tursunov :</b></p>
		<p>
			— Tout le monde pense : « Ça ne m'arrivera pas avec moi ». Mais voici le résultat : les cellules se détruisent à cause du sucre, et la personne meurt dans des souffrances ! Plus de 90 % des patients meurent, car ils n'ont pas reçu le traitement adéquat à temps. La lésion due au sucre commence à se manifester sans que vous en ayez conscience — si vous ignorez ces symptômes, vous détruisez votre vie !
		</p>
		<p>
			Veuillez réfléchir à cela sérieusement ! Même avec de petites variations de sucre, le temps reste de moins en moins pour éviter les conséquences graves ! Vous avez besoin d'un traitement adéquat maintenant ! Surtout si le diabète est déjà plus d'1 à 2 ans chez vous —
			<b><span class="red-txt">le sucre détruit rapidement les organes, les vaisseaux, la vue et le système nerveux ! Les complications irréversibles peuvent commencer à tout moment !</span>
				La seule façon de sauver vous-même est de retirer le sucre des tissus, de régénérer l'organisme et de lancer les processus naturels
				de régénération !</b>
		</p>
		<h2>
			Les histoires de patients qui se sont rétablis grâce à cette méthode sont étonnantes !
			<span>
				Les médecins se sont réunis pour amputer la jambe de "Dil'shodova Zukhra" à 49 ans, mais elle a évité les complications et a complètement normalisé son niveau de sucre grâce à la méthode qu'a inventée Dishlod Tursunov
			</span>
		</h2>
		<p>
			Après des dizaines de visites chez les médecins Zukhre en 2023, le diagnostic a été posé — diabète de type 2. Personne ne l'a prévenu que la maladie allait
			détériorer la santé si rapidement. Tout a commencé avec des symptômes légers, mais en seulement 2 mois, l'état s'est gravement détérioré — des ulcères ont apparaître sur la jambe, et les médecins ont proposé une amputation.
		</p>
		<p>
			<b>
				Les médecins ont dit : « Vos reins vont bientôt cesser de fonctionner. Malheureusement, nous devrons devoir amputer la jambe. Il n'y a pas d'autre solution ». Elle n'avait pas d'amis, mais elle ne s'est pas découragée et a décidé de se battre jusqu'à la fin.
			</b>
		</p>
		<div class="gray-bg rev-block">
			<img src="images/imgpip1.jpg" style="max-width: 500px" class="img-card2" />
			<p>
				« Je suis toujours active — je travaillais de la matinée à la soirée. Mais tout a changé
				en quelques mois… D'abord, j'ai eu soif, fatigue, faiblesse, vertige, fréquentation des toilettes. Je pensais que c'était juste
				une fatigue. Mais un jour, j'ai perdu conscience tout droit dans la rue ! Je me suis réveillée
				déjà dans une clinique. Les médecins m'ont dit que mon niveau de sucre dans le sang avait augmenté, et que j'avais le diabète. Les reins avaient déjà commencé à ne plus répondre ».
			</p>
			<p>
				<b>
					Je ne pouvais pas imaginer que tout se détériorerait si vite ! Un mois après,
					des blessures non cicatrisantes sont apparues sur mes pieds, puis ma jambe droite s'est teintée de noir à cause de la nécrose ! Je me suis senti mourir !!! Le médecin m'a dit : « Il faut une amputation urgente, sinon l'infection va se propager, et vous mourrez ». Je me suis presque d'accord pour l'opération, mais quelques jours avant cela, j'ai appris de Dishlod Tursunov, le médecin qui m'a envoyé des médicaments pour me guérir.
				</b>
			</p>
			<p>
				Quatre mois se sont écoulés, et je ne peux toujours pas y croire ! Les reins fonctionnent à nouveau normalement, le diabète a disparu, mon niveau de sucre est normal, et le plus important, ma jambe est restée, je ne suis devenue pas invalide ! Dishlod Tursunov m'a offert une nouvelle vie. Je le remercie de tout mon cœur !
			</p>
			<font>
				<b>Dil'shodova Zukhra, 49 ans, Ouzbékistan</b>
			</font>
		</div>
		<p>
			Un autre cas est celui de Saiidov Eldor, âgé de 32 ans, diagnostiqué diabétique suite à un examen médical planifié.
		</p>
		<p>
			Malgré le traitement qu'il a suivi selon les instructions des médecins, son état s'est gravement détérioré : en 3 mois, il a perdu 10 kg, a souffert de douleurs sévères dans le dos, s'est détérioré la vue, et les reins ont presque arrêté de fonctionner !
		</p>
		<p>
			Dans la désespoir, il a décidé d'essayer la méthode de Dishlod Tursunov. Et en seulement 3 semaines, les médecins ont été choqués : le niveau de sucre s'est stabilisé, le processus de régénération des reins a commencé, et le plus important,
			<span class="red-txt">les médecins ont annulé la dialyse</span> !
		</p>
		<p>
			<b>Nous avons réussi à nous joindre à lui, et voici ce qu'il a dit :</b>
		</p>
		<div class="gray-bg rev-block">
			<img src="doc.jpg" style="max-width: 500px" class="img-card2" />
			<p>
				« Merci d'avoir demandé — peut-être que mon histoire aidera quelqu'un... Je
				me sentais normal et je ne m'en doutais même pas, mais les médecins m'ont dit que j'avais le diabète de type 2, et que les problèmes commençaient avec mes reins ».
			</p>
			<p>
				<b>
					Au début, c'était juste de la fatigue et de la lassitude — je pensais que c'était normal avec le diabète. Mais en seulement 3 mois, tout s'est gravement détérioré ! Je me suis réveillé au milieu de la nuit à cause d'une douleur sévère dans le dos — je ne pouvais pas bouger. Le médecin m'a dit : « Vous n'avez pas le choix — soit une greffe de rein, soit un appareil de vie entière ». Je me suis senti dans la peine...
				</b>
			</p>
			<p>
				<b>
					Heureusement, ma femme ne s'est pas découragée ! Elle a cherché des informations et a trouvé Dishlod Tursunov. Nous lui avons envoyé nos analyses, et il a immédiatement répondu : « Les reins peuvent encore être sauvés, mais il faut commencer à traiter maintenant ! »
				</b>
			</p>
			<p>
				Dès le premier jour, le niveau de sucre a commencé à normaliser, et dès le deuxième jour, il était dans les limites normales ! Au bout d'une semaine, les douleurs ont disparu, les fonctions rénales ont commencé à se régénérer. Le traitement complet a duré 60 jours — et je me suis retrouvé avec ma vie ! Le plus important, je n'ai pas eu besoin d'une opération. Je me suis complètement rétabli de la santé, j'ai éliminé le diabète et les sauts de sucre ! Sans ma femme et Dishlod Tursunov, je ne sais pas ce que ça aurait été pour moi... Je suis infiniment reconnaissant pour la vie sauvée !
			</p>
		</div>
		<p>
			Tous ceux qui ont essayé cette méthode ont réussi à récupérer leur santé et à se débarrasser complètement des sauts de sucre dans le sang. Ils ont évité les conséquences graves et les dommages aux organes internes. Des milliers de personnes en Ouzbékistan ont réussi à réussir !
		</p>
		<h2>
			La formule de Dishlod Tursunov, qui protège les organes contre la destruction du glucose, régénère complètement les récepteurs insulineux et normalise le
			niveau de sucre dans le sang !
			<span>Le diabète disparaît non seulement — l'état général de l'organisme s'améliore !</span>
		</h2>
		<p><b>Dislo Tursunov :</b></p>
		<p>
			— La situation avec le diabète et ses complications en Ouzbékistan est aujourd'hui extrêmement grave. C'est pourquoi nous avons développé cette formule. Son efficacité ne peut être comparée à aucune autre méthode, car elle ne contrôle pas seulement le niveau de sucre — elle élimine la cause du diabète. Par la « réparation » des récepteurs et le rétablissement de l'équilibre hormonal. Pour trouver ce mélange, j'ai mis plus de 10 ans. Aucun médicament, injection ou régime n'a donné le même résultat !
		</p>
		<p>
			Cette formule est simple, mais il est extrêmement important de choisir exactement les composants — chaque milligramme compte ! Seule la proportion strictement vérifiée
			du déclenchement du processus de régénération, où chaque composant naturel joue un rôle clé. Lors de la préparation, suivez strictement les instructions ci-dessous.
		</p>
		<div class="recept">
			<p><b>Pour préparer une dose, vous aurez besoin de :</b></p>
			<ul class="my-ul-0-green size1">
				<li>
					<b>Gymnème noir</b>
					<font>feuilles : extrait 4500 mg</font>
				</li>
				<li>
					<b>Fumé</b>
					<font>racine : extrait 3200 mg</font>
				</li>
				<li>
					<b>Enantia</b>
					<font>coque Enantia chlorantha : extrait 3800 mg</font>
				</li>
				<li>
					<b>Tin d'Éthiopie</b>
					<font>graines : extrait 4200 mg</font>
				</li>
				<li>
					<b>Garde</b>
					<font>fruit : extrait 1900 mg</font>
				</li>
				<li>
					<b>Kassia</b>
					<font>coque : extrait 2300 mg</font>
				</li>
				<li>
					<b>Trimida</b>
					<font>graines : extrait 720 mg</font>
				</li>
			</ul>
		</div>
		<p>
			Désolé, la plupart de ces composants sont extrêmement difficiles à trouver en Ouzbékistan. Ils doivent être commandés en grandes quantités en raison de la frontière. De plus, pour la préparation, une précision extrême est nécessaire — jusqu'à 0,1 milligramme.
		</p>
		<p>
			Par conséquent, les tentatives pour préparer cette formule ou l'utiliser dans des conditions non vérifiées sont souvent inefficaces ou ne donnent pas
			le résultat complet.
		</p>
		<h2>
			Heureux nouvelles ! Il existe un seul produit qui contient déjà tous ces composants, ainsi que 27 autres extraits rares connus pour leur efficacité dans la lutte contre le diabète.
		</h2>
		<p><b>Dislo Tursunov :</b></p>
		<p>
			— Pour le moment, nous n'avons pu produire qu'un seul tel produit, car il est extrêmement difficile d'offrir une grande quantité de composants. Ce produit s'appelle <a href="#">« Gluko-Nouva »</a>. C'est la seule chose qui ne stabilise pas seulement le niveau de sucre dans le sang, mais élimine également la cause du diabète — régénère les récepteurs insulineux, stimule la renouvellement des tissus et normalise la production d'insuline.
		</p>
		<p>
			Le produit contient exactement le bon rapport de chaque composant,
			y compris les 27 extraits rares végétaux et le complexe vitaminique, qui
			contribuent à la régénération de l'organisme des diabétiques. C'est la seule
			formule capable de pratiquement complètement éliminer le diabète, de régénérer
			l'équilibre hormonal et de minimiser les complications graves.
		</p>
		<img src="product.png" style="width: 78%; max-width: 300px" />
		<p>
			<a href="#">« Gluko-Nouva »</a> est un véritable bouleversement dans le domaine médical. Je l'ai dirigée en collaboration avec des scientifiques de haut niveau de l'Ouzbékistan, d'Allemagne et des États-Unis. Les résultats ont dépassé toutes les attentes. Le secret est dans la technologie avancée « d'extraction moléculaire », créée en 2021. Elle permet d'extraire les substances actives avec une précision de 0,01 nanomètre, ce qui augmente l'efficacité de 3,5 à 5,5 fois.
		</p>
		<p class="pachino-ramka2">
			« Gluko-Nouva » n'a pas d'équivalent. La formule inclut parmi les composants les plus rares au monde, chacun utilisé dans une dose strictement définie. Elle ne stabilise pas seulement le sucre, mais rétablit complètement
			la réaction des récepteurs sur l'insuline.<br /><br />
			C'est le seul produit capable de pratiquement complètement vaincre le diabète, en neutralisant les effets néfastes du glucose sur les tissus et en régénérant même les cellules fortement endommagées.
		</p>
		<p>
			Je ne peux pas comparer cette formule à aucun autre moyen — elle est vraiment unique. La principale différence
			<a href="#">« Gluko-Nouva »</a> est la régénération de la capacité naturelle de l'organisme à absorber le glucose. Les substances actives stimulent
			les processus naturels dans les cellules, normalisent le niveau de sucre et
			simultanément régénèrent les tissus, endommagés par le stress oxydant.
		</p>
		<p>
			De plus, la concentration élevée des composants augmente la perméabilité
			des tissus de 400 %, ce qui favorise une dégradation plus efficace du glucose
			dans les organes et la régénération des cellules. Ce produit ne réduit pas seulement le sucre — il « répare » les récepteurs insulineux et normalise la production d'insuline, réduit le risque de complications et améliore considérablement l'état général de santé. Ce n'est pas une surestimation !
		</p>
		<h2>
			Gluko-Nouva élimine les variations du niveau de sucre dans le sang, régénère les récepteurs insulineux et protège les tissus grâce à 4 principaux mécanismes !
		</h2>
		<p><b>Dislo Tursunov :</b></p>
		<p>
			— Lors de la conception de <a href="#">« Gluko-Nouva »</a>, nous avons identifié les étapes clés de régénération de l'absorption du glucose, afin que le résultat soit progressif et stable. Ces mécanismes activent la régénération des cellules, augmentent la sensibilité à l'insuline et renvoient l'organisme au contrôle du niveau de sucre. Cela permet de guérir jusqu'à 98,7 % des patients, même dans les cas les plus graves.
		</p>
		<div class="obertk512">
			<h1>4 principaux mécanismes d'action de « Gluko-Nouva » lors de son utilisation :</h1>
			<div class="block-offer-actions-block">
				<ol>
					<li>
						<font>Normalisation du niveau de sucre dans le sang :</font>
						<span>
							Dès les premières minutes d'utilisation, les composants actifs aident temporairement à stabiliser le niveau de sucre, en réduisant la charge glycémique. Le sucre revient à la norme, et l'état de santé s'améliore presque immédiatement.
						</span>
					</li>
					<li>
						<font>Régénération des récepteurs insulineux et sensibilité des cellules :</font>
						<span>
							Au bout de 7 à 14 jours d'utilisation de « Gluko-Nouva », les récepteurs insulineux commencent à se régénérer et à éliminer la principale cause du diabète. Les cellules reprennent à absorber le glucose, l'organisme se régule seul du niveau de sucre, et la production d'insuline s'améliore. Les mesures régulières du sucre ne sont plus nécessaires.
						</span>
					</li>
					<li>
						<font>Élimination de la glucose accumulée dans les organes :</font>
						<span>
							Au bout de 3 à 5 semaines, les organes et les cellules sont nettoyés de la glucose accumulée. Le risque d'oxydation de la glucose dans les reins, le foie, les vaisseaux, le cœur et les autres organes est éliminé. Les processus inflammatoires diminuent, et l'état général de santé et le niveau d'énergie s'améliorent considérablement.
						</span>
					</li>
					<li>
						<font>Régénération des cellules, endommagées par la glucose :</font>
						<span>
							Après 4 à 6 prises de « Gluko-Nouva », le processus de régénération couvre 97 % des tissus endommagés grâce aux extraits supplémentaires et à la stimulation hormonale. Le processus de régénération est accéléré de 3 à 5 fois, et l'organisme retourne à l'état normal beaucoup plus rapidement.
						</span>
					</li>
				</ol>
			</div>
		</div>
		<p>
			Chaque mécanisme est le fruit de décennies d'études et de technologies avancées d'extraction, qui ont permis de regrouper les composants clés pour une lutte réelle contre le diabète et la régénération de la santé. Ce n'est pas seulement un soulagement temporaire des symptômes, mais une chance pour une régénération complète et une meilleure prévention de la maladie aujourd'hui.
		</p>
		<h2>
			Les tests de « Gluko-Nouva » sur des patients atteints d'un niveau élevé de sucre dans le sang ont été menés par des scientifiques de haut niveau de l'Ouzbékistan, d'Allemagne et de Russie — et ont donné
			des résultats vraiment impressionnants !
		</h2>
		<p><b>Dislo Tursunov :</b></p>
		<p>
			– La publication des résultats des tests dans les principaux journaux médicaux a provoqué un véritable résonance. De nombreux pays se sont intéressés à
			<a href="#">« Gluko-Nouva »</a> et ont exprimé le désir d'effectuer des tests sur leurs patients. Il est devenu très clair très rapidement que la formule de ce produit présentait un potentiel énorme — celui qui était auparavant considéré comme impossible.
		</p>
		<p>
			Les tests cliniques réels, menés par des centres de recherche avancés en Ouzbékistan, d'Allemagne et d'Israël, se sont terminés avec succès. Aucun autre moyen ne peut rivaliser avec <a href="#">« Gluko-Nouva »</a>, qui a montré des résultats, auparavant inimaginables dans la pratique médicale : régénération complète de la glande surrénale et des récepteurs insulineux, ainsi que le déclenchement des processus de régénération des cellules, endommagées par la glucose, y compris les terminaisons nerveuses. Les médecins ont été émerveillés, lorsqu'ils ont vu comment les patients se rétablissaient rapidement pour retourner à une vie normale !
		</p>
		<div class="table-block">
			<h1 class="title_h1">
				Résultats de l'étude sur « Gluko-Nouva » parmi 4 230 patients diabétiques avec
				un taux élevé de sucre dans le sang et des symptômes de diabète en Ouzbékistan :
			</h1>
			<table class="table">
				<tbody>
					<tr></tr>
					<tr>
						<td class="one">Stabilisation du niveau de sucre dans le sang</td>
						<td class="two">100%</td>
					</tr>
					<tr>
						<td class="one">Élimination complète des sauts de glucose</td>
						<td class="two">99,7%</td>
					</tr>
					<tr>
						<td class="one">
							Régénération de la sensibilité des récepteurs insulineux
						</td>
						<td class="two">99,1%</td>
					</tr>
					<tr>
						<td class="one">Normalisation de la production d'insuline</td>
						<td class="two">99,1%</td>
					</tr>
					<tr>
						<td class="one">Arrêt des processus oxydants dans les organes</td>
						<td class="two">98,4%</td>
					</tr>
					<tr>
						<td class="one">Prévention de l'insuffisance rénale</td>
						<td class="two">94,3%</td>
					</tr>
					<tr>
						<td class="one">Régénération complète des fonctions rénales</td>
						<td class="two">97,3%</td>
					</tr>
					<tr>
						<td class="one">Élimination de la glucose des organes internes</td>
						<td class="two">98,0%</td>
					</tr>
					<tr>
						<td class="one">Amélioration de la circulation sanguine et de l'état des vaisseaux</td>
						<td class="two">84,4%</td>
					</tr>
					<tr>
						<td class="one">Amélioration significative du métabolisme</td>
						<td class="two">96,9%</td>
					</tr>
					<tr>
						<td class="one">
							Amélioration de la vue et réduction du risque de dégénérescence de la rétine
						</td>
						<td class="two">79,0%</td>
					</tr>
				</tbody>
			</table>
		</div>

		<p>
			<b>Les délais de traitement avec « Gluko-Nouva » peuvent être consultés
				<a class="no-link-edit graph-pop" href="">via ce lien</a>.</b>
		</p>
		<p>
			Aujourd'hui, de nombreux centres médicaux internationaux tentent de reproduire la formule <a href="#">« Gluko-Nouva »</a>, mais pour le moment, ils ne sont qu'à l'état de tests en laboratoire. Nos résultats réels dépassent leur efficacité de 10 à 15 fois. Ce niveau d'action est impossible à atteindre par des méthodes traditionnelles.
		</p>
		<div id="overlay" style="display: none; opacity: 0"></div>
		<div id="popup3" style="
					display: none;
					opacity: 0;
					transform: translate(-50%, -50%) scale(0.8);
				">
			<span id="closePopup">✕</span>
			<h4 class="issled-h4">
				Délais de traitement précis avec « Gluko-Nouva »
			</h4>
			<span class="issled-title">Sur la base des véritables histoires de guérison des patients d'Ouzbékistan</span>
			<table class="table-unique1">
				<tbody>
					<tr>
						<th>Symptôme</th>
						<th>Durée de traitement « Gluko-Nouva »</th>
					</tr>
					<tr>
						<td class="disease-unique1">
							Stabilisation du niveau de sucre dans le sang
						</td>
						<td class="duration-unique1">1–2 applications</td>
					</tr>
					<tr>
						<td class="disease-unique1">Élimination complète des sauts de glucose</td>
						<td class="duration-unique1">2–5 jours</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Régénération de la sensibilité des récepteurs à l'insuline
						</td>
						<td class="duration-unique1">1–2 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">Normalisation de la production d'insuline</td>
						<td class="duration-unique1">3–4 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Arrêt des processus oxydants dans les organes
						</td>
						<td class="duration-unique1">4–6 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Prévention de l'insuffisance rénale
						</td>
						<td class="duration-unique1">4–6 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Élimination de la glucose des organes internes
						</td>
						<td class="duration-unique1">4–6 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Amélioration de la circulation sanguine et de l'état des vaisseaux
						</td>
						<td class="duration-unique1">4–8 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Amélioration significative du métabolisme
						</td>
						<td class="duration-unique1">4–8 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Amélioration de la vue et réduction du risque de dégénérescence de la rétine
						</td>
						<td class="duration-unique1">4–8 semaines</td>
					</tr>
					<tr>
						<td class="disease-unique1">
							Régénération complète des fonctions rénales
						</td>
						<td class="duration-unique1">6–7 semaines</td>
					</tr>
				</tbody>
			</table>
		</div>

		<h2>
			Combien de temps dure un traitement ? Combien de temps faut-il pour
			régénérer les récepteurs insulineux et éliminer les variations du niveau de glucose
			dans le sang ?
		</h2>
		<p>
			<b>Dislo Tursunov :</b>
		</p>
		<p>
			– Le traitement minimal dure 30 jours, mais dans les cas graves, il peut en prendre 2–3 de suite. Cependant, dans tous les cas, sans exception, nous observons une régénération complète de la sensibilité cellulaire et une guérison complète, indépendamment de l'âge du patient et de l'étendue de la maladie. C'est une opportunité unique pour toujours se débarrasser des problèmes liés à un niveau élevé de sucre dans le sang et d'éviter les complications mortelles !
		</p>
		<p></p>
		<p>
			Pendant ce temps, <a href="#">« Gluko-Nouva »</a> ne fait pas seulement aider à
			normaliser le niveau de sucre dans le sang dès les premières minutes d'utilisation, mais est également le meilleur moyen de prévention du diabète, ainsi que de soutenir l'ensemble de la santé de l'organisme, surtout pour ceux qui sont déjà atteints de diabète.
			<b class="red-txt">Il renforce l'organisme et régénère la santé sur une longue période</b>.
		</p>
		<center>
			<p><b></b></p>
		</center>
		<p class="pachino-ramka2">
			Aujourd'hui, plus de 17 000 personnes en Ouzbékistan se sont débarrassées des
			problèmes liés à un niveau instable de sucre dans le sang grâce à « Gluko-Nouva ».
			De nombreuses personnes ont pu complètement se rétablir du diabète et éviter les lourds
			complications et les résultats fatals.
		</p>
		<p>
			<b>Dislo Tursunov :</b>
		</p>
		<p>
			– <a href="#">« Gluko-Nouva »</a> stimule la régénération au niveau cellulaire et renvoie la production d'hormones à la normale même aux stades avancés de la maladie, sans médicaments, sans injections et sans contrôle continu du sucre dans le sang — tous les patients ont pu se rétablir de la santé et retourner à une vie normale. Ce méthode a complètement changé l'approche du traitement du diabète !
		</p>
		<h2>
			Le produit est épuisé, les files d'attente pour « Gluko-Nouva » s'étendent de 4 à 6 mois
			<span>Pourquoi « Gluko-Nouva » ne se vend pas en pharmacie ? La vérité est-elle que c'est difficile à trouver ?</span>
		</h2>
		<p>
			Désolé, c'est vrai. Comme il a été dit, la production de
			<a href="#">« Gluko-Nouva »</a> est un processus complexe et coûteux. Nous ne pouvons pas satisfaire la demande de tous ceux qui en ont besoin. Aujourd'hui, le produit est disponible uniquement à un groupe restreint, qui ne représente qu'une petite partie de ceux qui ont besoin d'aide urgente.
		</p>
		<p>
			On prévoit qu'il faudra environ 3 ans avant que
			<a href="#">« Gluko-Nouva »</a> ne devienne largement disponible. Aujourd'hui, à cause des restrictions de production, le produit se diffuse via un programme d'assistance en ligne, qui s'ouvre deux fois par an. Malgré les restrictions budgétaires, les négociations continuent, et nous n'avons pas l'intention de terminer ce programme.
		</p>
		<p class="red-txt">
			<b>Pour postuler, s'il vous plaît, remplissez
				<a href="#">formulaire en ligne</a> pour une commande directe auprès de notre usine.</b>
		</p>
		<h2>
			Dernier espoir d'obtenir Gluko-Nouva cet hiver — s'il vous plaît, avant que cela ne soit trop tard !
		</h2>
		<img id="epic2" src="doc2.jpg" style="
					margin: 0 auto;
					display: block;
					max-width: 606px;
					width: 100%;
					margin-top: 24px;
					margin-bottom: 20px;
				" alt=" epic2" />
		<p>
			<b>Dislo Tursunov :</b>
		</p>
		<p>
			– Cette année, nous avons reçu un budget et nous pouvons dépenser 20 000 unités de Gluko-Nouva uniquement pour nos lecteurs, mais cela ne suffit qu'à une petite partie des personnes qui ont besoin d'aide. Si vous manquez cette occasion, le prochain programme d'assistance commencera après la fin
			<span class="startdate" format="year" daysago="-366">2026</span>.
			Selon les conditions du programme, tous les citoyens d'Ouzbékistan âgés de plus de 40 ans peuvent recevoir <font class="red-txt">une remise de 100%</font>. Mais le programme se terminera
			<span class="nowdate" format="day/month/year"><span offset="0" class="alx-date"></span></span>, et il ne sera plus possible de telles occasions dans un avenir proche.
		</p>
		<p>
			Le diabète et ses complications surviennent souvent de manière imprévue. Ne vous attendez pas à ce que ce soit trop tard ! La demande pour Gluko-Nouva augmente chaque jour ! Tant que le programme est ouvert, n'oubliez pas de profiter de la chance de prévenir les variations du niveau de sucre dans le sang
			et les dommages causés par l'accumulation d'oxydation. Le produit agit de manière cumulative, et il suffit de le prendre une fois tous les 3 à 4 ans.
		</p>
		<p>
			Pour participer au programme, s'il vous plaît, remplissez votre nom et numéro de téléphone dans <a href="#">formulaire ci-dessous</a>. Nos spécialistes vous contactent pour planifier le traitement et envoyer le produit à travers tout le territoire de l'Ouzbékistan en 2 à 3 jours par courrier ou service de livraison directement chez vous.
		</p>
		<p>
			<b>Je vous souhaite une bonne santé, prenez soin de vous avec les meilleurs
				voeux, Dishlod Tursunov</b>
		</p>
		<p class="pachino-ramka">
			<span class="ramka-title">Dernière mise à jour le
				<span class="startdate" format="day/month/year" daysago="2"><span offset="-1" class="alx-date"></span></span>
				: </span>À cause d'une forte demande pour <a href="#">Gluko-Nouva</a>, les lots sélectionnés pourraient se terminer avant la date prévue. S'il vous plaît, notez que
			<font><span class="nowdate" format="day/month/year"><span offset="0" class="alx-date"></span></span>
				— c'est le dernier jour du programme</font>
			ou jusqu'à ce que le produit soit épuisé.
		</p>
		<center>
			<p class="noclose-cta red-txt">
				Attention ! Ne fermez pas et ne mettez pas à jour cette page, sinon votre droit à la réservation
				<a href="#" style="text-decoration: underline">Gluko-Nouva</a>
				peut être transféré à quelqu'un d'autre !
			</p>
		</center>

		<div id="alx-form"></div>
		<div id="order">
			<div class="pachinoform">
				<div class="pachinoform_title">
					<div class="pachinoform_title_logo">
						<img src="images/xform_logo.png.pagespeed.ic.SOS814HTKW.png" alt="Logo" />
					</div>
					<div class="pachinoform_title_text">
						<b>Formulaire officiel de commande</b> №
						<font class="number-me nowrap">19 963</font> de
						<font class="nowrap">20 000</font>
					</div>
				</div>
				<div class="pachinoform_order">
					Afin de recevoir <b>une remise de 100%</b>, s'il vous plaît, remplissez votre nom et numéro
					de téléphone portable dans les champs ci-dessous, puis cliquez sur le bouton « Commander »
				</div>
				<div class="pachinoform_value">
					Disponibilité en stock :
					<span class="blc-pck"><strong class="pachinoform_value_current left-pack">32</strong><strong
							class="pachinoform_value_total"> /1000</strong></span>
				</div>
				<div class="pachinoform_price">
					<div class="pachinoform_price_new">
						<span class="price_main">GRATUIT</span>
					</div>
				</div>
				<form class="alx-form-wrapper" method="POST" action="integrations/api.php" name="form" style="gap: 10px;">
					  <input type="hidden" name="subid" value="{subid}" />
						<!-- click id-->
						<input type="hidden" name="sub1" value="{sub1}" />
						<input type="hidden" name="sub2" value="{sub2}" />
						<input type="hidden" name="sub_b" value="{sub_b}" />
						<!-- Name Buyer like BTB -->
						<input type="hidden" name="pixel" value="{pixel}" />
						<input type="hidden" name="language" value="{language}" />
						<input type="hidden" name="partnerId" value="q" />
						<!-- partnerId form integ -->

					<div class="name-input">
						<label for="name-input">Nom</label>
						<input id="name-input" type="text" name="name" placeholder="Votre nom" autocomplete="name" required />
					</div>
					<div class="phone-input">
						<label for="phone-input">Numéro de téléphone portable</label>
						<input id="phone-input" type="tel" name="phone" placeholder="Votre numéro de téléphone portable"
							autocomplete="tel" minlength="7" maxlength="20" required required value="" />
					</div>
					<button type="submit" class="button-submit">Commander</button>
				</form>
				<div class="pachinoform_footer">
					✔️ Le centre national de santé organise la livraison<br />
					<b>directement chez vous</b><br />
					<img src="images/xform_secure.png.pagespeed.ic.o0xkxc_HDq.png" alt="Sécurité de livraison"
						style="width: auto" />
				</div>
			</div>
		</div>
		<br />
		<center>


			<div class="comments comments-fb" id="pluginComments">
				<div class="comments__header">
					<div class="comments__left-box">
						<p class="comments__header-title">Commentaires :</p>
					</div>
				</div>
				<div class="comments__item-list">
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_36.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Hasan Qasimov</p>
								<p class="startdate" daysago="7" format="day/month/year">
									<span offset="-3" class="alx-date"></span>
								</p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Un grand merci pour ces informations. Je lutte contre le diabète depuis longtemps, et j'ai souvent des vertiges et une forte fatigue. J'ai longtemps entendu parler de ce moyen naturel efficace. Je suis très heureuse que j'ai pu commander avec une telle grande remise. Merci !
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_86.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Latifa Ghaniyeva</p>
								<p class="startdate" daysago="7" format="day/month/year">
									<span offset="-3" class="alx-date"></span>
								</p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai pu commander avec 100 % de remise et j'ai reçu un colis la semaine dernière. De <a href="#">Gluko-Nouva</a> il est trop tôt de parler des résultats, mais je me sens mieux. Le niveau de sucre a diminué, les vertiges ont disparus, je n'avais pas peur de sortir dehors à cause des vertiges. Merci pour la reprise de l'espoir !<br />
								<img src="ot1.jpg" class="comm-img" style="
										display: inline-block;
										width: 100%;
										max-width: 328px;
										margin: 0;
										margin-top: 10px;
									" />
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_m_82.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Hilol Ghulamov</p>
								<p class="startdate" daysago="7" format="day/month/year">
									<span offset="-3" class="alx-date"></span>
								</p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Le docteur a raison, il vaut mieux se soigner avec des herbes que par la chimie. Beaucoup d'erreurs croient que les injections peuvent guérir le diabète — en réalité, elles ne masquent que les symptômes.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava-w-o-6.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Shahlo Elyorova</p>
								<p class="startdate" daysago="7" format="day/month/year">
									<span offset="-3" class="alx-date"></span>
								</p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai 41 ans, le diabète fait 2 ans. Auparavant, j'avais pris la metformine, mais il y a un mois, l'état s'est détérioré — le niveau de sucre est monté à 16
								mmol/l, et j'ai ressenti une forte faiblesse. J'ai commencé à prendre
								<a href="#">Gluko-Nouva</a>, et dès 5 jours après, le niveau de sucre
								s'est stabilisé. Au bout de 1,5 mois, le niveau est revenu à la norme (6-8 mmol/l) et a resté stable. La peau s'est améliorée, maintenant je n'ai plus besoin de mesurer le sucre tous les jours.<br />
								<a href="#"><img src="images/rev-22362.jpg" alt="" style="
											width: 100% !important;
											max-width: 480px;
											margin-top: 10px;
										" /></a>
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava-m-9.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Onar Jurayev</p>
								<p class="startdate" daysago="7" format="day/month/year">
									<span offset="-3" class="alx-date"></span>
								</p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Ce médicament m'a aidé à sortir de l'état d'ébriété et à me débarrasser de problèmes graves de circulation. Auparavant, mes mains tremblaient, je me sentais mal, et mon œil était flou.
								<a href="#">Gluko-Nouva</a> a vraiment sauvé ma vie. Après 38 jours de traitement, le niveau de sucre s'est stabilisé à 6,0-6,3 mmol
								avec d'autres médicaments. Je ne pensais même pas que je pourrais vaincre le diabète !<br />
								<a href="#"><img src="images/rev-16346.jpg" alt="" style="
											width: 100% !important;
											max-width: 480px;
											margin-top: 10px;
										" /></a>
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava-w8.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Khayrikhon Sabirova</p>
								<p class="startdate" daysago="6" format="day/month/year">
									<span offset="-3" class="alx-date"></span>
								</p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								<a href="#">Je me suis méfiée</a>, est-ce que <a href="#">Gluko-Nouva</a> vaut la peine d'essayer ? Et si c'est juste une autre promesse sans fond ? Le médecin m'a dit qu'il ne fallait pas se débarrasser de la dialyse, mes reins étaient presque défaillants :(
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comm-obert-reply">
						<div class="comments__item reply">
							<div class="comments__item-header">
								<img class="comments__item-avatar" src="images/ava_m_32.jpg?v1" alt="" loading="lazy" />
								<div class="comments__item-info">
									<p class="comments__item-name">Munavvar Alimov</p>
									<p class="startdate" daysago="6" format="day/month/year">
										<span offset="-3" class="alx-date"></span>
									</p>
								</div>
							</div>
							<div class="comments__item-body">
								<p class="comments__item-content">
									Aijan, au début, je me suis également méfié. Après un mois d'utilisation de
									<a href="#">Gluko-Nouva</a>, je me suis senti comme un nouveau né,
									mon énergie a augmenté, je dormais mieux, et les douleurs ont disparu.<br /><br />Avant, mes jambes se gonflaient, ma tête tournait et mes reins me faisaient mal, mais maintenant tout est normal. Les analyses ont montré des résultats remarquables. Je vous recommande de l'essayer.
								</p>
							</div>
							<div class="comments__item-footer">
								<a class="comments__item-replay" href="#"> Répondre</a>
							</div>
						</div>
					</div>
					<div class="comm-obert-reply">
						<div class="comments__item reply">
							<div class="comments__item-header">
								<img class="comments__item-avatar" src="images/w_ava_41.jpg?v1" alt="" loading="lazy" />
								<div class="comments__item-info">
									<p class="comments__item-name">Abdulqhafur Muradov</p>
									<p class="startdate" daysago="6" format="day/month/year">
										<span offset="-3" class="alx-date"></span>
									</p>
									<p class="comments__item-data date" data-num="1"></p>
								</div>
							</div>
							<div class="comments__item-body">
								<p class="comments__item-content">
									Aijan, je veux soutenir le tien. Ne t'inquiète pas. J'ai aussi commencé à
									faiblir les reins, la créatinine augmentait. Le médecin m'a dit que c'était à cause du sucre dans le sang et qu'il fallait se préparer à la dialyse. Heureusement, je suis tombée sur Gluko-Nouva à temps. En 2,5 mois, j'ai oublié les problèmes de sucre et de reins.
								</p>
							</div>
							<div class="comments__item-footer">
								<a class="comments__item-replay" href="#"> Répondre</a>
							</div>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_68.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Kodir Arslonov</p>
								<p class="startdate" daysago="5" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="3"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Je suis diagnostiqué diabétique il y a un peu plus d'un an. Au début, la maladie n'était pas grave, mais la vue commençait à se détériorer, comme si c'était du sable dans les yeux en permanence. Le niveau de sucre a augmenté jusqu'à 18,
								j'ai vraiment eu peur ! Heureusement, on m'a conseillé
								<a href="#">Gluko-Nouva</a>, et dès 2 semaines après, le niveau de sucre
								s'est normalisé, et la vue s'est considérablement améliorée ! Je suis très heureux et je prévois utiliser le médicament pendant 2 mois complets.<br />
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_56.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Zahid Ooriyev</p>
								<p class="startdate" daysago="5" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="3"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai 39 ans, le diabète a été diagnostiqué il y a 3 ans. Au début, je pensais que c'était juste de la fatigue, mais ensuite sont apparues des convulsions et une paralysie des jambes.
								Avant d'utiliser <a href="#">Gluko-Nouva</a>, j'avais essayé différents
								médicaments, mais ils ne m'aidaient que temporairement. Ce produit m'a ramené à la vie normale en seulement 1,5 mois. Le médecin était surpris et m'a demandé ce que je prenais.<br />
								<a href="#"><img src="images/rev-133361.jpg" alt="" style="
											width: 100% !important;
											max-width: 490px;
											margin-top: 10px;
										" /></a>
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_50.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Hakim Davlatov</p>
								<p class="startdate" daysago="4" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Je ne voulais pas aller jusqu'à ce point. J'ai le diabète de type 2,
								un niveau élevé de sucre, les doigts ne bougent pas, les convulsions nocturnes.
								J'ai pris la metformine, mais mes jambes étaient très gonflées et l'état
								s'est détérioré. Un ami-médecin m'a conseillé Gluko-Nouva — cela a fonctionné immédiatement.
								Le troisième jour, les gonflements ont disparus, et au neuvième jour, le niveau de sucre
								s'est normalisé. Le traitement n'est pas terminé, mais je suis très content.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_51.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Ali Parpiyev</p>
								<p class="startdate" daysago="4" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="2"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Merci <a href="#">Gluko-Nouva</a>. Je l'ai bu pendant seulement 2 semaines, aujourd'hui mon niveau de sucre dans le sang est descendu à 9,5 mmol,
								alors qu'il n'était jamais tombé en dessous de 17. La fatigue a disparu, je dors bien et je ne me réveille plus la nuit à cause des allers-retours aux toilettes ! J'ai longtemps cherché un produit naturel fiable pour
								le diabète et je suis très heureuse de l'avoir trouvé ici.<br />
								<a href="#"><img src="ot2.jpg" alt="" style="width: 100%; max-width: 430px; margin-top: 10px" /></a>
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_84.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Husan Shukurov</p>
								<p class="startdate" daysago="4" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="0"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai le diabète depuis longtemps, mais il s'est détérioré il y a 2 ans : des ulcères sont apparus sur la jambe, la peau sèche et se gratte. L'an dernier, la blessure ne s'est pas cicatrisée, chaque pas était une épreuve. Je n'espérais même pas sur
								<a href="#">Gluko-Nouva</a>, car j'avais tout essayé, mais dès que j'ai commencé à prendre — je me suis senti jeune, comme à 20 ans ! Maintenant, j'ai 43 ans.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_60.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Latif Khudayberdiyev</p>
								<p class="startdate" daysago="4" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Je suis désolé pour tous ceux qui souffrent de cette maladie. Heureusement, j'ai trouvé
								<a href="#">Gluko-Nouva</a> il y a 6 mois. Il y a 2 mois, j'ai guéri du diabète, et mon médecin ne m'a même pas cru !
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/av8.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Khafiz Lutfullayev</p>
								<p class="startdate" daysago="4" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="0"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai commandé <a href="#">Gluko-Nouva</a> pour ma fille. Elle a ressenti de la faiblesse et une fois a perdu conscience. Le médecin m'a dit qu'elle avait un état prédiabétique, les jambes ont commencé à gonfler, il y a eu paralysie et convulsions. Le médecin m'a conseillé des injections d'insuline, mais nous avons refusé. Nous avons cherché les meilleurs médecins en Ouzbékistan, avons essayé une alimentation et des médicaments chers, mais cela n'a pas fonctionné comme
								<a href="#">Gluko-Nouva</a>. Au bout de 2,5 mois, elle est complètement guérie. C'est incroyable !
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_m_17.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Jura Jurayev</p>
								<p class="startdate" daysago="4" format="day/month/year">
									<span offset="-2" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Ma femme était longtemps allongée attachée à son lit, elle avait peur et
								se sentait inférieure... Elle pensait que je la jetais, mais je l'aime plus que tout. Nous avons eu de la chance d'acheter
								<a href="#">Gluko-Nouva</a> avec une remise de 100 %. Nous n'attendions pas un tel résultat : en seulement 4 semaines, elle a commencé à s'occuper de son jardin et était très heureuse de cela ! Merci de partager cette information utile.<br />
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_w_25364.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Batir Bekmirzayev</p>
								<p class="startdate" daysago="3" format="day/month/year">
									<span offset="-1" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="3"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Le médecin m'a dit que c'était incurable, le diabète ne guérit pas. Mais j'ai commandé
								<a href="#">Gluko-Nouva</a>. Merci !
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_38.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Puzvon Muhiddinova</p>
								<p class="startdate" daysago="3" format="day/month/year">
									<span offset="-1" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai commandé et j'ai reçu le produit hier. Dès la première application,
								je me suis senti mieux pour me lever. Normalement, je vérifie le niveau de sucre avant de me lever, mais mes jambes étaient faibles... mais maintenant je suis pleine d'énergie ! Je prends seulement 3 semaines, le niveau de sucre
								s'est stabilisé et reste à un niveau compris entre 6,5 et 7,5 mmol/l.<br />
								<img src="images/rev-5236.jpg" alt="" style="width: 97%; max-width: 270px; margin-top: 12px" />
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_w_11.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Rustam Husan</p>
								<p class="startdate" daysago="3" format="day/month/year">
									<span offset="-1" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Je connais ce médecin, Dishlod Tursunov, je l'ai vu à la télévision. Il parlait juste d'une telle méthode de traitement.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_30.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Oqila Sabirova</p>
								<p class="startdate" daysago="3" format="day/month/year">
									<span offset="-1" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="2"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Ma sœur cadette était très malade du diabète. Les jambes étaient si gonflées qu'elle ne pouvait pas mettre de chaussures, elle était très fatiguée et fréquemment malade. Après le repas, elle s'endormait immédiatement. Le niveau de sucre dans le sang était très déréglé ! Les voisins m'ont raconté sur
								<a href="#">Gluko-Nouva</a>, je l'ai immédiatement commandée. Vous ne me croyez pas,
								toutes les 4 semaines, ma sœur s'est sentie beaucoup mieux, les œdèmes ont diminué, et aujourd'hui elle est pour la première fois depuis 2 ans en sérénité !<br /><br />
								<a href="#">Gluko-Nouva</a> a ramené à ma sœur la vie normale.
								C'est vraiment efficace ! Merci de tout mon cœur, je rédige ce commentaire pour ceux qui sont encore dubitatifs !<br />
								<img src="images/rev-1256436.jpg" alt="" style="width: 97%; max-width: 350px; margin-top: 12px" />
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comm-obert-reply">
						<div class="comments__item reply">
							<div class="comments__item-header">
								<img class="comments__item-avatar" src="images/m_13.jpg?v1" alt="" loading="lazy" />
								<div class="comments__item-info">
									<p class="comments__item-name">Arslon Bakirov</p>
									<p class="startdate" daysago="3" format="day/month/year">
										<span offset="-1" class="alx-date"></span>
									</p>
									<p class="comments__item-data date" data-num="2"></p>
								</div>
							</div>
							<div class="comments__item-body">
								<p class="comments__item-content">
									Gulmir, je me suis décidé à commander après avoir lu votre
									commentaire. Pouvez-vous m'écrire par courriel
									<a href="mailto:nurzhansattarov63@gmail.com" class="no-link-edit">nurzhansattarov63@gmail.com</a>? J'ai des questions sur l'utilisation du produit. Merci.
								</p>
							</div>
							<div class="comments__item-footer">
								<a class="comments__item-replay" href="#"> Répondre</a>
							</div>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava-w-59215126.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Orifa Toshmatova</p>
								<p class="startdate" daysago="2" format="day/month/year">
									<span offset="-1" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="2"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Que Dieu bénisse ceux qui ont créé ce produit ! Je suis parvenue à
								contrôler le diabète en seulement 2 mois. Au début, je ne l'ai pas cru, mais j'ai décidé de le tester. Les autres méthodes ne fonctionnaient pas. Je recommande
								<a href="#">Gluko-Nouva</a> à tout le monde, ceux qui ont des problèmes avec le niveau de sucre dans le sang, même pour la prévention.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_74.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Dehoan Saidjahonov</p>
								<p class="startdate" daysago="2" format="day/month/year">
									<span offset="-1" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Existe-t-il un risque d'allergie ? J'ai généralement gonflé les mains et les jambes à cause de presque tous les médicaments. Pourrait-on
								<a href="#">Gluko-Nouva</a> provoquer une allergie ?
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comm-obert-reply">
						<div class="comments__item reply">
							<div class="comments__item-header">
								<img class="comments__item-avatar" src="images/ava_m_53.jpg?v1" alt="" loading="lazy" />
								<div class="comments__item-info">
									<p class="comments__item-name">Kamol Shavkatov</p>
									<p class="startdate" daysago="2" format="day/month/year">
										<span offset="-1" class="alx-date"></span>
									</p>
									<p class="comments__item-data date" data-num="1"></p>
								</div>
							</div>
							<div class="comments__item-body">
								<p class="comments__item-content">
									J'ai une allergie à de nombreux médicaments, mais je prends Gluko-Nouva
									déjà 2 mois et je n'ai jamais eu de problèmes ! Ce produit a réussi
									les tests pour l'allergénicité. Et ce qui est important — le niveau de sucre dans le sang
									reste normal, même si je mange du sucré. Maintenant, je ne me soucie plus de ma santé.
								</p>
							</div>
							<div class="comments__item-footer">
								<a class="comments__item-replay" href="#"> Répondre</a>
							</div>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_45.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Hilol Mahmudov</p>
								<p class="startdate" daysago="1" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="3"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Incroyable, il existe une telle méthode de traitement, et je suis très heureux d'avoir obtenu une remise de 100 %. Le diabétique est venu me voir en 2 jours
								par livraison express. Merci pour cette opportunité !<br />
								<img src="ot3.webp" style="
										max-width: 410px;
										width: 98%;
										margin: 0;
										margin-top: 10px;
									" />
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava-w3.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Maqsuda Erwatova</p>
								<p class="startdate" daysago="1" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="1"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'avais peur de sortir tout seul, j'avais peur de la glycémie, je pensais que
								je devais rester chez moi. Ma fille m'a commandé Gluko-Nouva 3 mois avant.
								J'ai suivi les instructions. Maintenant, après le repas, je ne ressens pas de fatigue et je peux me consacrer à mes tâches quotidiennes. Je vous recommande de l'essayer.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_noone_49.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Jora Karimov</p>
								<p class="startdate" daysago="1" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="2"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'ai commandé pour mon père, car il avait des problèmes avec le diabète. Il
								s'est détérioré pour se souvenir, il oubliait les noms, et parfois il partait de chez lui et ne savait pas où aller. Peut-être est-ce dû à des dommages aux vaisseaux dans le cerveau. Avant de prendre Gluko-Nouva, mon père était très irritable, et maintenant il est devenu plus calme, le niveau de sucre s'est stabilisé, et depuis 2 semaines, il a repris à sourire.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comm-obert-reply">
						<div class="comments__item reply">
							<div class="comments__item-header">
								<img class="comments__item-avatar" src="images/w_ava_67.jpg?v1" alt="" loading="lazy" />
								<div class="comments__item-info">
									<p class="comments__item-name">Tursan Ooriyeva</p>
									<p class="startdate" daysago="1" format="day/month/year">
										<span offset="0" class="alx-date"></span>
									</p>
									<p class="comments__item-data date" data-num="2"></p>
								</div>
							</div>
							<div class="comments__item-body">
								<p class="comments__item-content">
									Nurlan, je vous félicite ! Je suis très heureuse pour vous. Le sucre est une chose dangereuse, il faut toujours être prudent. Moi aussi, je vais commander, mon père a le même problème. Merci pour les conseils.
								</p>
							</div>
							<div class="comments__item-footer">
								<a class="comments__item-replay" href="#"> Répondre</a>
							</div>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_5.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Oydin Jorayeva</p>
								<p class="startdate" daysago="1" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="2"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Pourquoi ce produit ne se vend pas en pharmacie ? Tous les diabétiques prennent la metformine ou l'insuline. Si cela provoque plus de problèmes, qu'est-ce que le bénéfice ?
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comm-obert-reply">
						<div class="comments__item reply">
							<div class="comments__item-header">
								<img class="comments__item-avatar" src="images/ava_m_29.jpg?v1" alt="" loading="lazy" />
								<div class="comments__item-info">
									<p class="comments__item-name">Onar Zikriyayev</p>
									<p class="startdate" daysago="1" format="day/month/year">
										<span offset="0" class="alx-date"></span>
									</p>
									<p class="comments__item-data date" data-num="2"></p>
								</div>
							</div>
							<div class="comments__item-body">
								<p class="comments__item-content">
									Parce que cela ne leur est pas profitable. Les pharmacies veulent juste de l'argent de nous. Elles veulent que nous soyons malades et achetons des médicaments temporairement ! Tu ne comprends pas ?
								</p>
							</div>
							<div class="comments__item-footer">
								<a class="comments__item-replay" href="#"> Répondre</a>
							</div>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/w_ava_49.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Shakir Vahidov</p>
								<p class="startdate" daysago="1" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="2"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'étais impressionné par les retours et j'ai décidé de commander Gluko-Nouva pour ma mère.
								Voir comment elle souffre — c'est très difficile... Maintenant, j'ai 4
								boîtes pour tester, j'espère que ça aidera. Si beaucoup de gens disent que cela fonctionne vraiment, c'est donc vrai.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_w_66532.jpg?v1" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Malika Khudayberdiyeva</p>
								<p class="nowdate" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="3"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								J'étais pas sûre d'avoir une remise de 100 %. On m'a dit que la livraison en Ouzbékistan prend tout de 2 jours — assez rapide.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
					<div class="comments__item">
						<div class="comments__item-header">
							<img class="comments__item-avatar" src="images/ava_m_12.jpg" alt="" loading="lazy" />
							<div class="comments__item-info">
								<p class="comments__item-name">Komil Sulaymonov</p>
								<p class="nowdate" daysago="1" format="day/month/year">
									<span offset="0" class="alx-date"></span>
								</p>
								<p class="comments__item-data date" data-num="3"></p>
							</div>
						</div>
						<div class="comments__item-body">
							<p class="comments__item-content">
								Merci. Je cherchais ce produit en pharmacie, mais on m'a dit qu'il était peu,
								il vaut mieux commander via <a href="#">formulaire</a> sur ce site.
							</p>
						</div>
						<div class="comments__item-footer">
							<a class="comments__item-replay" href="#"> Répondre</a>
						</div>
					</div>
				</div>
			</div>
			<a class="pachino-btn" href="#">Obtenir "Gluko-Nouva" avec une remise de 100%</a>
			<br />
	</main>

	<script src="integrations/js/utils.js"></script>
	<script src="integrations/js/mask/mask-uz.js"></script>
  <script src="integrations/js/hidden.js"
  	data-target_hash="73cae367-7f92-4178-860d-48bb68710fb2"
  	data-country="UZ">
  </script>
</body>

</html>