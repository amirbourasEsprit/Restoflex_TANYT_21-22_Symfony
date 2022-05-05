<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reclamation/email.html.twig */
class __TwigTemplate_28c137fa9e1f684eb3e2126a572e19d8620955bf30f953f335aacdbe4fd051d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/email.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<!--[if IE]><html xmlns=\"http://www.w3.org/1999/xhtml\" class=\"ie\"><![endif]-->
<!--[if !IE]><!-->
\t<html style=\"margin: 0;padding: 0;\" xmlns=\"http://www.w3.org/1999/xhtml\"><!--<![endif]--><head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t\t<title></title>
\t\t<!--[if !mso]><!-->
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<!--<![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width\"/><style type=\"text/css\">
\t\t\t@media only screen and(min-width: 620px) {
\t\t\t\t.wrapper {
\t\t\t\t\tmin-width: 600px !important
\t\t\t\t}
\t\t\t\t.wrapper h1 {}
\t\t\t\t.wrapper h1 {
\t\t\t\t\tfont-size: 56px !important;
\t\t\t\t\tline-height: 60px !important
\t\t\t\t}
\t\t\t\t.wrapper h2 {}
\t\t\t\t.wrapper h2 {
\t\t\t\t\tfont-size: 32px !important;
\t\t\t\t\tline-height: 40px !important
\t\t\t\t}
\t\t\t\t.wrapper h3 {}
\t\t\t\t.column {}
\t\t\t\t.wrapper .size-8 {
\t\t\t\t\tfont-size: 8px !important;
\t\t\t\t\tline-height: 14px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-9 {
\t\t\t\t\tfont-size: 9px !important;
\t\t\t\t\tline-height: 16px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-10 {
\t\t\t\t\tfont-size: 10px !important;
\t\t\t\t\tline-height: 18px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-11 {
\t\t\t\t\tfont-size: 11px !important;
\t\t\t\t\tline-height: 19px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-12 {
\t\t\t\t\tfont-size: 12px !important;
\t\t\t\t\tline-height: 19px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-13 {
\t\t\t\t\tfont-size: 13px !important;
\t\t\t\t\tline-height: 21px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-14 {
\t\t\t\t\tfont-size: 14px !important;
\t\t\t\t\tline-height: 21px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-15 {
\t\t\t\t\tfont-size: 15px !important;
\t\t\t\t\tline-height: 23px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-16 {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\tline-height: 24px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-17 {
\t\t\t\t\tfont-size: 17px !important;
\t\t\t\t\tline-height: 26px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-18 {
\t\t\t\t\tfont-size: 18px !important;
\t\t\t\t\tline-height: 26px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-20 {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t\tline-height: 28px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-22 {
\t\t\t\t\tfont-size: 22px !important;
\t\t\t\t\tline-height: 31px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-24 {
\t\t\t\t\tfont-size: 24px !important;
\t\t\t\t\tline-height: 32px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-26 {
\t\t\t\t\tfont-size: 26px !important;
\t\t\t\t\tline-height: 34px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-28 {
\t\t\t\t\tfont-size: 28px !important;
\t\t\t\t\tline-height: 36px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-30 {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t\tline-height: 38px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-32 {
\t\t\t\t\tfont-size: 32px !important;
\t\t\t\t\tline-height: 40px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-34 {
\t\t\t\t\tfont-size: 34px !important;
\t\t\t\t\tline-height: 43px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-36 {
\t\t\t\t\tfont-size: 36px !important;
\t\t\t\t\tline-height: 43px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-40 {
\t\t\t\t\tfont-size: 40px !important;
\t\t\t\t\tline-height: 47px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-44 {
\t\t\t\t\tfont-size: 44px !important;
\t\t\t\t\tline-height: 50px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-48 {
\t\t\t\t\tfont-size: 48px !important;
\t\t\t\t\tline-height: 54px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-56 {
\t\t\t\t\tfont-size: 56px !important;
\t\t\t\t\tline-height: 60px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-64 {
\t\t\t\t\tfont-size: 64px !important;
\t\t\t\t\tline-height: 63px !important
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t<meta name=\"x-apple-disable-message-reformatting\"/>
\t\t<style>
\t\t\ttype=\"text/css\" .main,
\t\t\t.mso {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\ttable {
\t\t\t\tborder-collapse: collapse;
\t\t\t\ttable-layout: fixed;
\t\t\t}
\t\t\t* {
\t\t\t\tline-height: inherit;
\t\t\t}
\t\t\t[x-apple-data-detectors] {
\t\t\t\tcolor: inherit !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t}
\t\t\t.wrapper .footer__share-button a:hover,
\t\t\t.wrapper .footer__share-button a:focus {
\t\t\t\tcolor: #2B54CC !important;
\t\t\t}
\t\t\t.wrapper .footer__share-button a.icon-white:hover,
\t\t\t.wrapper .footer__share-button a.icon-white:focus {
\t\t\t\tcolor: #2B54CC !important;
\t\t\t}
\t\t\t.wrapper .footer__share-button a.icon-black:hover,
\t\t\t.wrapper .footer__share-button a.icon-black:focus {
\t\t\t\tcolor: #2B54CC !important;
\t\t\t}
\t\t\t.btn a:hover,
\t\t\t.btn a:focus,
\t\t\t.footer__share-button a:hover,
\t\t\t.footer__share-button a:focus,
\t\t\t.email-footer__links a:hover,
\t\t\t.email-footer__links a:focus {
\t\t\t\topacity: 0.8;
\t\t\t}
\t\t\t.preheader,
\t\t\t.header,
\t\t\t.layout,
\t\t\t.column {
\t\t\t\ttransition: width 0.25s ease-in-out, max-width 0.25s ease-in-out;
\t\t\t}
\t\t\t.preheader td {
\t\t\t\tpadding-bottom: 8px;
\t\t\t}
\t\t\t.layout,
\t\t\tdiv.header {
\t\t\t\tmax-width: 400px !important;
\t\t\t\t-fallback-width: 95% !important;
\t\t\t\twidth: calc(100% - 20px) !important;
\t\t\t}
\t\t\tdiv.preheader {
\t\t\t\tmax-width: 360px !important;
\t\t\t\t-fallback-width: 90% !important;
\t\t\t\twidth: calc(100% - 60px) !important;
\t\t\t}
\t\t\t.snippet,
\t\t\t.webversion {
\t\t\t\tFloat: none !important;
\t\t\t}
\t\t\t.stack .column {
\t\t\t\tmax-width: 400px !important;
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\t.fixed-width.has-border {
\t\t\t\tmax-width: 402px !important;
\t\t\t}
\t\t\t.fixed-width.has-border .layout__inner {
\t\t\t\tbox-sizing: border-box;
\t\t\t}
\t\t\t.snippet,
\t\t\t.webversion {
\t\t\t\twidth: 50% !important;
\t\t\t}
\t\t\t.ie .btn {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.ie .stack .column,
\t\t\t.ie .stack .gutter {
\t\t\t\tdisplay: table-cell;
\t\t\t\tfloat: none !important;
\t\t\t}
\t\t\t.ie div.preheader,
\t\t\t.ie .email-footer {
\t\t\t\tmax-width: 560px !important;
\t\t\t\twidth: 560px !important;
\t\t\t}
\t\t\t.ie .snippet,
\t\t\t.ie .webversion {
\t\t\t\twidth: 280px !important;
\t\t\t}
\t\t\t.ie div.header,
\t\t\t.ie .layout {
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 600px !important;
\t\t\t}
\t\t\t.ie .two-col .column {
\t\t\t\tmax-width: 300px !important;
\t\t\t\twidth: 300px !important;
\t\t\t}
\t\t\t.ie .three-col .column,
\t\t\t.ie .narrow {
\t\t\t\tmax-width: 200px !important;
\t\t\t\twidth: 200px !important;
\t\t\t}
\t\t\t.ie .wide {
\t\t\t\twidth: 400px !important;
\t\t\t}
\t\t\t.ie .stack.fixed-width.has-border,
\t\t\t.ie .stack.has-gutter.has-border {
\t\t\t\tmax-width: 602px !important;
\t\t\t\twidth: 602px !important;
\t\t\t}
\t\t\t.ie .stack.two-col.has-gutter .column {
\t\t\t\tmax-width: 290px !important;
\t\t\t\twidth: 290px !important;
\t\t\t}
\t\t\t.ie .stack.three-col.has-gutter .column,
\t\t\t.ie .stack.has-gutter .narrow {
\t\t\t\tmax-width: 188px !important;
\t\t\t\twidth: 188px !important;
\t\t\t}
\t\t\t.ie .stack.has-gutter .wide {
\t\t\t\tmax-width: 394px !important;
\t\t\t\twidth: 394px !important;
\t\t\t}
\t\t\t.ie .stack.two-col.has-gutter.has-border .column {
\t\t\t\tmax-width: 292px !important;
\t\t\t\twidth: 292px !important;
\t\t\t}
\t\t\t.ie .stack.three-col.has-gutter.has-border .column,
\t\t\t.ie .stack.has-gutter.has-border .narrow {
\t\t\t\tmax-width: 190px !important;
\t\t\t\twidth: 190px !important;
\t\t\t}
\t\t\t.ie .stack.has-gutter.has-border .wide {
\t\t\t\tmax-width: 396px !important;
\t\t\t\twidth: 396px !important;
\t\t\t}
\t\t\t.ie .fixed-width .layout__inner {
\t\t\t\tborder-left: 0 none white !important;
\t\t\t\tborder-right: 0 none white !important;
\t\t\t}
\t\t\t.ie .layout__edges {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.mso .layout__edges {
\t\t\t\tfont-size: 0;
\t\t\t}
\t\t\t.layout-fixed-width,
\t\t\t.mso .layout-full-width {
\t\t\t\tbackground-color: #ffffff;
\t\t\t}
\t\t\t@media only screen and(min-width: 620px) {
\t\t\t\t.column,
\t\t\t\t.gutter {
\t\t\t\t\tdisplay: table-cell;
\t\t\t\t\tFloat: none !important;
\t\t\t\t\tvertical-align: top;
\t\t\t\t}
\t\t\t\tdiv.preheader,
\t\t\t\t.email-footer {
\t\t\t\t\tmax-width: 560px !important;
\t\t\t\t\twidth: 560px !important;
\t\t\t\t}
\t\t\t\t.snippet,
\t\t\t\t.webversion {
\t\t\t\t\twidth: 280px !important;
\t\t\t\t}
\t\t\t\tdiv.header,
\t\t\t\t.layout,
\t\t\t\t.one-col .column {
\t\t\t\t\tmax-width: 600px !important;
\t\t\t\t\twidth: 600px !important;
\t\t\t\t}
\t\t\t\t.fixed-width.has-border,
\t\t\t\t.fixed-width.x_has-border,
\t\t\t\t.has-gutter.has-border,
\t\t\t\t.has-gutter.x_has-border {
\t\t\t\t\tmax-width: 602px !important;
\t\t\t\t\twidth: 602px !important;
\t\t\t\t}
\t\t\t\t.two-col .column {
\t\t\t\t\tmax-width: 300px !important;
\t\t\t\t\twidth: 300px !important;
\t\t\t\t}
\t\t\t\t.three-col .column,
\t\t\t\t.column.narrow,
\t\t\t\t.column.x_narrow {
\t\t\t\t\tmax-width: 200px !important;
\t\t\t\t\twidth: 200px !important;
\t\t\t\t}
\t\t\t\t.column.wide,
\t\t\t\t.column.x_wide {
\t\t\t\t\twidth: 400px !important;
\t\t\t\t}
\t\t\t\t.two-col.has-gutter .column,
\t\t\t\t.two-col.x_has-gutter .column {
\t\t\t\t\tmax-width: 290px !important;
\t\t\t\t\twidth: 290px !important;
\t\t\t\t}
\t\t\t\t.three-col.has-gutter .column,
\t\t\t\t.three-col.x_has-gutter .column,
\t\t\t\t.has-gutter .narrow {
\t\t\t\t\tmax-width: 188px !important;
\t\t\t\t\twidth: 188px !important;
\t\t\t\t}
\t\t\t\t.has-gutter .wide {
\t\t\t\t\tmax-width: 394px !important;
\t\t\t\t\twidth: 394px !important;
\t\t\t\t}
\t\t\t\t.two-col.has-gutter.has-border .column,
\t\t\t\t.two-col.x_has-gutter.x_has-border .column {
\t\t\t\t\tmax-width: 292px !important;
\t\t\t\t\twidth: 292px !important;
\t\t\t\t}
\t\t\t\t.three-col.has-gutter.has-border .column,
\t\t\t\t.three-col.x_has-gutter.x_has-border .column,
\t\t\t\t.has-gutter.has-border .narrow,
\t\t\t\t.has-gutter.x_has-border .narrow {
\t\t\t\t\tmax-width: 190px !important;
\t\t\t\t\twidth: 190px !important;
\t\t\t\t}
\t\t\t\t.has-gutter.has-border .wide,
\t\t\t\t.has-gutter.x_has-border .wide {
\t\t\t\t\tmax-width: 396px !important;
\t\t\t\t\twidth: 396px !important;
\t\t\t\t}
\t\t\t}
\t\t\t@supports(display: flex) {
\t\t\t\t@media only screen and(min-width: 620px) {
\t\t\t\t\t.fixed-width.has-border .layout__inner {
\t\t\t\t\t\tdisplay: flex !important;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t@media only screen and(-webkit-min-device-pixel-ratio: 2),
\t\t\tonly screen and(min--moz-device-pixel-ratio: 2),
\t\t\tonly screen and(-o-min-device-pixel-ratio: 2 / 1),
\t\t\tonly screen and(min-device-pixel-ratio: 2),
\t\t\tonly screen and(min-resolution: 192dpi),
\t\t\tonly screen and(min-resolution: 2dppx) {
\t\t\t\t.fblike {
\t\t\t\t\tbackground-image: url('https://i7.createsend1.com/static/eb/master/13-the-blueprint-3/images/fblike@2x.png') !important;
\t\t\t\t}
\t\t\t\t.tweet {
\t\t\t\t\tbackground-image: url('https://i10.createsend1.com/static/eb/master/13-the-blueprint-3/images/tweet@2x.png') !important;
\t\t\t\t}
\t\t\t\t.linkedinshare {
\t\t\t\t\tbackground-image: url('https://i8.createsend1.com/static/eb/master/13-the-blueprint-3/images/lishare@2x.png') !important;
\t\t\t\t}
\t\t\t\t.forwardtoafriend {
\t\t\t\t\tbackground-image: url('https://i9.createsend1.com/static/eb/master/13-the-blueprint-3/images/forward@2x.png') !important;
\t\t\t\t}
\t\t\t}
\t\t\t@media(max-width: 321px) {
\t\t\t\t.fixed-width.has-border .layout__inner {
\t\t\t\t\tborder-width: 1px 0 !important;
\t\t\t\t}
\t\t\t\t.layout,
\t\t\t\t.stack .column {
\t\t\t\t\tmin-width: 320px !important;
\t\t\t\t\twidth: 320px !important;
\t\t\t\t}
\t\t\t\t.border {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t\t.has-gutter .border {
\t\t\t\t\tdisplay: table-cell;
\t\t\t\t}
\t\t\t}
\t\t\t@media(max-width: 619px) {
\t\t\t\t.email-flexible-footer .left-aligned-footer .column,
\t\t\t\t.email-flexible-footer .center-aligned-footer,
\t\t\t\t.email-flexible-footer .right-aligned-footer .column {
\t\t\t\t\t/*Overriding inline styles for mobile compatiability*/
\t\t\t\t\ttext-align: center !important;
\t\t\t\t\tmax-width: calc(100% - 40px) !important;
\t\t\t\t\twidth: calc(100% - 40px);
\t\t\t\t\tmargin-left: 20px;
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t}
\t\t\t\t.email-flexible-footer .footer__share-button {
\t\t\t\t\tmax-width: 280px;
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t}
\t\t\t\t.email-flexible-footer .left-aligned-footer .flexible-footer__share-button__container,
\t\t\t\t.email-flexible-footer .center-aligned-footer .flexible-footer__share-button__container,
\t\t\t\t.email-flexible-footer .right-aligned-footer .flexible-footer__share-button__container {
\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t/*Overriding inline styles for mobile compatiability*/
\t\t\t\t\tmargin-left: 5px !important;
\t\t\t\t\tmargin-right: 5px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.mso div {
\t\t\t\tborder: 0 none white !important;
\t\t\t}
\t\t\t.mso .w560 .divider {
\t\t\t\tMargin-left: 260px !important;
\t\t\t\tMargin-right: 260px !important;
\t\t\t}
\t\t\t.mso .w360 .divider {
\t\t\t\tMargin-left: 160px !important;
\t\t\t\tMargin-right: 160px !important;
\t\t\t}
\t\t\t.mso .w260 .divider {
\t\t\t\tMargin-left: 110px !important;
\t\t\t\tMargin-right: 110px !important;
\t\t\t}
\t\t\t.mso .w160 .divider {
\t\t\t\tMargin-left: 60px !important;
\t\t\t\tMargin-right: 60px !important;
\t\t\t}
\t\t\t.mso .w354 .divider {
\t\t\t\tMargin-left: 157px !important;
\t\t\t\tMargin-right: 157px !important;
\t\t\t}
\t\t\t.mso .w250 .divider {
\t\t\t\tMargin-left: 105px !important;
\t\t\t\tMargin-right: 105px !important;
\t\t\t}
\t\t\t.mso .w148 .divider {
\t\t\t\tMargin-left: 54px !important;
\t\t\t\tMargin-right: 54px !important;
\t\t\t}
\t\t\t.mso .size-8,
\t\t\t.ie .size-8 {
\t\t\t\tfont-size: 8px !important;
\t\t\t\tline-height: 14px !important;
\t\t\t}
\t\t\t.mso .size-9,
\t\t\t.ie .size-9 {
\t\t\t\tfont-size: 9px !important;
\t\t\t\tline-height: 16px !important;
\t\t\t}
\t\t\t.mso .size-10,
\t\t\t.ie .size-10 {
\t\t\t\tfont-size: 10px !important;
\t\t\t\tline-height: 18px !important;
\t\t\t}
\t\t\t.mso .size-11,
\t\t\t.ie .size-11 {
\t\t\t\tfont-size: 11px !important;
\t\t\t\tline-height: 19px !important;
\t\t\t}
\t\t\t.mso .size-12,
\t\t\t.ie .size-12 {
\t\t\t\tfont-size: 12px !important;
\t\t\t\tline-height: 19px !important;
\t\t\t}
\t\t\t.mso .size-13,
\t\t\t.ie .size-13 {
\t\t\t\tfont-size: 13px !important;
\t\t\t\tline-height: 21px !important;
\t\t\t}
\t\t\t.mso .size-14,
\t\t\t.ie .size-14 {
\t\t\t\tfont-size: 14px !important;
\t\t\t\tline-height: 21px !important;
\t\t\t}
\t\t\t.mso .size-15,
\t\t\t.ie .size-15 {
\t\t\t\tfont-size: 15px !important;
\t\t\t\tline-height: 23px !important;
\t\t\t}
\t\t\t.mso .size-16,
\t\t\t.ie .size-16 {
\t\t\t\tfont-size: 16px !important;
\t\t\t\tline-height: 24px !important;
\t\t\t}
\t\t\t.mso .size-17,
\t\t\t.ie .size-17 {
\t\t\t\tfont-size: 17px !important;
\t\t\t\tline-height: 26px !important;
\t\t\t}
\t\t\t.mso .size-18,
\t\t\t.ie .size-18 {
\t\t\t\tfont-size: 18px !important;
\t\t\t\tline-height: 26px !important;
\t\t\t}
\t\t\t.mso .size-20,
\t\t\t.ie .size-20 {
\t\t\t\tfont-size: 20px !important;
\t\t\t\tline-height: 28px !important;
\t\t\t}
\t\t\t.mso .size-22,
\t\t\t.ie .size-22 {
\t\t\t\tfont-size: 22px !important;
\t\t\t\tline-height: 31px !important;
\t\t\t}
\t\t\t.mso .size-24,
\t\t\t.ie .size-24 {
\t\t\t\tfont-size: 24px !important;
\t\t\t\tline-height: 32px !important;
\t\t\t}
\t\t\t.mso .size-26,
\t\t\t.ie .size-26 {
\t\t\t\tfont-size: 26px !important;
\t\t\t\tline-height: 34px !important;
\t\t\t}
\t\t\t.mso .size-28,
\t\t\t.ie .size-28 {
\t\t\t\tfont-size: 28px !important;
\t\t\t\tline-height: 36px !important;
\t\t\t}
\t\t\t.mso .size-30,
\t\t\t.ie .size-30 {
\t\t\t\tfont-size: 30px !important;
\t\t\t\tline-height: 38px !important;
\t\t\t}
\t\t\t.mso .size-32,
\t\t\t.ie .size-32 {
\t\t\t\tfont-size: 32px !important;
\t\t\t\tline-height: 40px !important;
\t\t\t}
\t\t\t.mso .size-34,
\t\t\t.ie .size-34 {
\t\t\t\tfont-size: 34px !important;
\t\t\t\tline-height: 43px !important;
\t\t\t}
\t\t\t.mso .size-36,
\t\t\t.ie .size-36 {
\t\t\t\tfont-size: 36px !important;
\t\t\t\tline-height: 43px !important;
\t\t\t}
\t\t\t.mso .size-40,
\t\t\t.ie .size-40 {
\t\t\t\tfont-size: 40px !important;
\t\t\t\tline-height: 47px !important;
\t\t\t}
\t\t\t.mso .size-44,
\t\t\t.ie .size-44 {
\t\t\t\tfont-size: 44px !important;
\t\t\t\tline-height: 50px !important;
\t\t\t}
\t\t\t.mso .size-48,
\t\t\t.ie .size-48 {
\t\t\t\tfont-size: 48px !important;
\t\t\t\tline-height: 54px !important;
\t\t\t}
\t\t\t.mso .size-56,
\t\t\t.ie .size-56 {
\t\t\t\tfont-size: 56px !important;
\t\t\t\tline-height: 60px !important;
\t\t\t}
\t\t\t.mso .size-64,
\t\t\t.ie .size-64 {
\t\t\t\tfont-size: 64px !important;
\t\t\t\tline-height: 63px !important;
\t\t\t}
\t\t</style>

\t\t<style>
\t\t\ttype=\"text/css\" .main,
\t\t\t.mso {
\t\t\t\tbackground-color: #2B54CC
\t\t\t}
\t\t\t.logo a:hover,
\t\t\t.logo a:focus {
\t\t\t\tcolor: #2B54CC !important
\t\t\t}
\t\t\t.footer-logo a:hover,
\t\t\t.footer-logo a:focus {
\t\t\t\tcolor: #2B54CC !important
\t\t\t}
\t\t\t.mso .layout-has-border {
\t\t\t\tborder-top: 1px solid #ccc;
\t\t\t\tborder-bottom: 1px solid #2B54CC
\t\t\t}
\t\t\t.mso .layout-has-bottom-border {
\t\t\t\tborder-bottom: 1px solid #2B54CC
\t\t\t}
\t\t\t.mso .border,
\t\t\t.ie .border {
\t\t\t\tbackground-color: #2B54CC
\t\t\t}
\t\t\t.mso h1,
\t\t\t.ie h1 {}
\t\t\t.mso h1,
\t\t\t.ie h1 {
\t\t\t\tfont-size: 56px !important;
\t\t\t\tline-height: 60px !important
\t\t\t}
\t\t\t.mso h2,
\t\t\t.ie h2 {}
\t\t\t.mso h2,
\t\t\t.ie h2 {
\t\t\t\tfont-size: 32px !important;
\t\t\t\tline-height: 40px !important
\t\t\t}
\t\t\t.mso h3,
\t\t\t.ie h3 {}
\t\t\t.mso .layout__inner,
\t\t\t.ie .layout__inner {}
\t\t\t.mso .footer__share-button p {}
\t\t\t.mso .footer__share-button p {
\t\t\t\tfont-family: Avenir, sans-serif
\t\t\t}
\t\t</style><meta name=\"robots\" content=\"noindex,nofollow\"/>
\t\t<meta property=\"og:title\" content=\"My First Campaign\"/>
\t</head>
\t<!--[if mso]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<body class=\"mso\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<![endif]-->
\t<!--[if !mso]><!-->
\t<body
\t\tclass=\"main no-padding\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;\">
\t\t<!--<![endif]-->
\t\t<table class=\"wrapper\" style=\"border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #2B54CC;\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div role=\"banner\">
\t\t\t\t\t\t\t<div class=\"preheader\" style=\"Margin: 0 auto;max-width: 560px;min-width: 280px; width: 280px;width: calc(28000% - 167440px);\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tstyle=\"border-collapse: collapse;display: table;width: 100%;\">
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" class=\"preheader\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr><td style=\"width: 280px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t<div class=\"snippet\" style=\"display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 140px; width: 140px;width: calc(14000% - 78120px);padding: 10px 0 5px 0;color: #999;font-family: Avenir,sans-serif;\"></div>
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td><td style=\"width: 280px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\" id=\"emb-email-header-container\">
\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" class=\"header\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr><td style=\"width: 600px\"><![endif]-->
\t\t\t\t\t\t\t\t<div class=\"logo emb-logo-margin-box\" style=\"font-size: 26px;line-height: 32px;Margin-top: 6px;Margin-bottom: 20px;color: #ffffff;font-family: Avenir,sans-serif;Margin-left: 20px;Margin-right: 20px;\" align=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"logo-center\" align=\"center\" id=\"emb-email-header\"><img style=\"display: block;height: auto;width: 100%;border: 0;max-width: 81px;\" src=\"images/log.png\" alt=\"\" width=\"81\"/></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"layout one-col fixed-width stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t\t\t\t\t<div<![endif]-- <!--[if (mso)|(IE)]> <table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"> <tr class=\"layout-fixed-width\"> <td style=\"width: 600px\" class=\"w560\">>
\t\t\t\t\t\t\t\t\t<div class=\"column\" style=\"text-align: left;color: #FFFFFF;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;\">

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 40px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div>

\t\t\t\t\t\t\t<div class=\"layout one-col fixed-width stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;background-color: #FFFFFF;\">
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr class=\"layout-fixed-width\" style=\"background-color: #2B54CC;\"><td style=\"width: 600px\" class=\"w560\"><![endif]-->
\t\t\t\t\t\t\t\t\t<div class=\"column\" style=\"text-align: left;color: #000;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;\">

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;mso-text-raise: 11px;vertical-align: middle;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"size-36\" style=\"mso-text-raise: 13px;Margin-top: 0;Margin-bottom: 20px;font-style: normal;font-weight: normal;color: #2B54CC;font-size: 30px;line-height: 38px;text-align: center;\" lang=\"x-size-36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>R&#233;clamation ajout&#233;e</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;mso-text-raise: 11px;vertical-align: middle;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"Margin-top: 0;Margin-bottom: 20px;font-family: courier new,courier,monospace;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-courier\">Nous voulons vous informer qu'une nouvelle r&#233;clamation  est ajout&#233;e. N'h&#233;sitez par de visiter votre espace pour plus d'information.</span>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn--flat btn--large\" style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<![if !mso]>
\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"border-radius: 0;display: inline-block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #ffffff !important;background-color: #418812;font-family: Avenir, sans-serif;\" href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/connexion\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAcc&#233;der a votre espace</a>
\t\t\t\t\t\t\t\t\t\t\t\t<![endif]>
\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><p style=\"line-height:0;margin:0;\">&nbsp;</p><v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" href=\"\" style=\"width:157px\" fillcolor=\"#418812\" stroke=\"f\"><v:textbox style=\"mso-fit-shape-to-text:t\" inset=\"0px,12px,0px,12px\"><center style=\"font-size:14px;line-height:24px;color:#FFFFFF;font-family:Avenir,sans-serif;font-weight:bold;mso-line-height-rule:exactly;mso-text-raise:4px\">Visiter notre site</center></v:textbox></v:rect><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div>

\t\t\t\t\t\t\t<div class=\"layout one-col fixed-width stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t\t\t\t\t<div class=\"column\" style=\"text-align: left;color: #000;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;\">

\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 61px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</div>
\t\t<div role=\"contentinfo\">
\t\t\t<div class=\"layout email-footer stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t<div
\t\t\t\t\tclass=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\">
\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr class=\"layout-email-footer\"><td style=\"width: 400px;\" valign=\"top\" class=\"w360\"><![endif]-->
\t\t\t\t\t<div class=\"column wide\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #999;font-family: Avenir,sans-serif;Float: left;max-width: 400px;min-width: 320px; width: 320px;width: calc(8000% - 47600px);\">
\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\">

\t\t\t\t\t\t\t<div style=\"font-size: 12px;line-height: 19px;margin-bottom: 15px;\"></div>
\t\t\t\t\t\t\t<div style=\"font-size: 12px;line-height: 19px;margin-bottom: 15px;Margin-top: 18px;\"></div>
\t\t\t\t\t\t\t<!--[if mso]>&nbsp;<![endif]-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layout one-col email-footer\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t<div
\t\t\t\t\tclass=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\">
\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr class=\"layout-email-footer\"><td style=\"width: 600px;\" class=\"w560\"><![endif]-->
\t\t\t\t\t<div class=\"column\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #999;font-family: Avenir,sans-serif;\">
\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"line-height:40px;font-size:40px;\" id=\"footer-spacing\">&nbsp;</div>
\t</body>
</html></td></tr></tbody></table></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<!--[if IE]><html xmlns=\"http://www.w3.org/1999/xhtml\" class=\"ie\"><![endif]-->
<!--[if !IE]><!-->
\t<html style=\"margin: 0;padding: 0;\" xmlns=\"http://www.w3.org/1999/xhtml\"><!--<![endif]--><head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
\t\t<title></title>
\t\t<!--[if !mso]><!-->
\t\t<meta
\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
\t\t<!--<![endif]-->
\t\t<meta name=\"viewport\" content=\"width=device-width\"/><style type=\"text/css\">
\t\t\t@media only screen and(min-width: 620px) {
\t\t\t\t.wrapper {
\t\t\t\t\tmin-width: 600px !important
\t\t\t\t}
\t\t\t\t.wrapper h1 {}
\t\t\t\t.wrapper h1 {
\t\t\t\t\tfont-size: 56px !important;
\t\t\t\t\tline-height: 60px !important
\t\t\t\t}
\t\t\t\t.wrapper h2 {}
\t\t\t\t.wrapper h2 {
\t\t\t\t\tfont-size: 32px !important;
\t\t\t\t\tline-height: 40px !important
\t\t\t\t}
\t\t\t\t.wrapper h3 {}
\t\t\t\t.column {}
\t\t\t\t.wrapper .size-8 {
\t\t\t\t\tfont-size: 8px !important;
\t\t\t\t\tline-height: 14px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-9 {
\t\t\t\t\tfont-size: 9px !important;
\t\t\t\t\tline-height: 16px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-10 {
\t\t\t\t\tfont-size: 10px !important;
\t\t\t\t\tline-height: 18px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-11 {
\t\t\t\t\tfont-size: 11px !important;
\t\t\t\t\tline-height: 19px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-12 {
\t\t\t\t\tfont-size: 12px !important;
\t\t\t\t\tline-height: 19px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-13 {
\t\t\t\t\tfont-size: 13px !important;
\t\t\t\t\tline-height: 21px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-14 {
\t\t\t\t\tfont-size: 14px !important;
\t\t\t\t\tline-height: 21px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-15 {
\t\t\t\t\tfont-size: 15px !important;
\t\t\t\t\tline-height: 23px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-16 {
\t\t\t\t\tfont-size: 16px !important;
\t\t\t\t\tline-height: 24px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-17 {
\t\t\t\t\tfont-size: 17px !important;
\t\t\t\t\tline-height: 26px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-18 {
\t\t\t\t\tfont-size: 18px !important;
\t\t\t\t\tline-height: 26px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-20 {
\t\t\t\t\tfont-size: 20px !important;
\t\t\t\t\tline-height: 28px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-22 {
\t\t\t\t\tfont-size: 22px !important;
\t\t\t\t\tline-height: 31px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-24 {
\t\t\t\t\tfont-size: 24px !important;
\t\t\t\t\tline-height: 32px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-26 {
\t\t\t\t\tfont-size: 26px !important;
\t\t\t\t\tline-height: 34px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-28 {
\t\t\t\t\tfont-size: 28px !important;
\t\t\t\t\tline-height: 36px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-30 {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t\tline-height: 38px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-32 {
\t\t\t\t\tfont-size: 32px !important;
\t\t\t\t\tline-height: 40px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-34 {
\t\t\t\t\tfont-size: 34px !important;
\t\t\t\t\tline-height: 43px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-36 {
\t\t\t\t\tfont-size: 36px !important;
\t\t\t\t\tline-height: 43px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-40 {
\t\t\t\t\tfont-size: 40px !important;
\t\t\t\t\tline-height: 47px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-44 {
\t\t\t\t\tfont-size: 44px !important;
\t\t\t\t\tline-height: 50px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-48 {
\t\t\t\t\tfont-size: 48px !important;
\t\t\t\t\tline-height: 54px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-56 {
\t\t\t\t\tfont-size: 56px !important;
\t\t\t\t\tline-height: 60px !important
\t\t\t\t}
\t\t\t\t.wrapper .size-64 {
\t\t\t\t\tfont-size: 64px !important;
\t\t\t\t\tline-height: 63px !important
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t<meta name=\"x-apple-disable-message-reformatting\"/>
\t\t<style>
\t\t\ttype=\"text/css\" .main,
\t\t\t.mso {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\ttable {
\t\t\t\tborder-collapse: collapse;
\t\t\t\ttable-layout: fixed;
\t\t\t}
\t\t\t* {
\t\t\t\tline-height: inherit;
\t\t\t}
\t\t\t[x-apple-data-detectors] {
\t\t\t\tcolor: inherit !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t}
\t\t\t.wrapper .footer__share-button a:hover,
\t\t\t.wrapper .footer__share-button a:focus {
\t\t\t\tcolor: #2B54CC !important;
\t\t\t}
\t\t\t.wrapper .footer__share-button a.icon-white:hover,
\t\t\t.wrapper .footer__share-button a.icon-white:focus {
\t\t\t\tcolor: #2B54CC !important;
\t\t\t}
\t\t\t.wrapper .footer__share-button a.icon-black:hover,
\t\t\t.wrapper .footer__share-button a.icon-black:focus {
\t\t\t\tcolor: #2B54CC !important;
\t\t\t}
\t\t\t.btn a:hover,
\t\t\t.btn a:focus,
\t\t\t.footer__share-button a:hover,
\t\t\t.footer__share-button a:focus,
\t\t\t.email-footer__links a:hover,
\t\t\t.email-footer__links a:focus {
\t\t\t\topacity: 0.8;
\t\t\t}
\t\t\t.preheader,
\t\t\t.header,
\t\t\t.layout,
\t\t\t.column {
\t\t\t\ttransition: width 0.25s ease-in-out, max-width 0.25s ease-in-out;
\t\t\t}
\t\t\t.preheader td {
\t\t\t\tpadding-bottom: 8px;
\t\t\t}
\t\t\t.layout,
\t\t\tdiv.header {
\t\t\t\tmax-width: 400px !important;
\t\t\t\t-fallback-width: 95% !important;
\t\t\t\twidth: calc(100% - 20px) !important;
\t\t\t}
\t\t\tdiv.preheader {
\t\t\t\tmax-width: 360px !important;
\t\t\t\t-fallback-width: 90% !important;
\t\t\t\twidth: calc(100% - 60px) !important;
\t\t\t}
\t\t\t.snippet,
\t\t\t.webversion {
\t\t\t\tFloat: none !important;
\t\t\t}
\t\t\t.stack .column {
\t\t\t\tmax-width: 400px !important;
\t\t\t\twidth: 100% !important;
\t\t\t}
\t\t\t.fixed-width.has-border {
\t\t\t\tmax-width: 402px !important;
\t\t\t}
\t\t\t.fixed-width.has-border .layout__inner {
\t\t\t\tbox-sizing: border-box;
\t\t\t}
\t\t\t.snippet,
\t\t\t.webversion {
\t\t\t\twidth: 50% !important;
\t\t\t}
\t\t\t.ie .btn {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.ie .stack .column,
\t\t\t.ie .stack .gutter {
\t\t\t\tdisplay: table-cell;
\t\t\t\tfloat: none !important;
\t\t\t}
\t\t\t.ie div.preheader,
\t\t\t.ie .email-footer {
\t\t\t\tmax-width: 560px !important;
\t\t\t\twidth: 560px !important;
\t\t\t}
\t\t\t.ie .snippet,
\t\t\t.ie .webversion {
\t\t\t\twidth: 280px !important;
\t\t\t}
\t\t\t.ie div.header,
\t\t\t.ie .layout {
\t\t\t\tmax-width: 600px !important;
\t\t\t\twidth: 600px !important;
\t\t\t}
\t\t\t.ie .two-col .column {
\t\t\t\tmax-width: 300px !important;
\t\t\t\twidth: 300px !important;
\t\t\t}
\t\t\t.ie .three-col .column,
\t\t\t.ie .narrow {
\t\t\t\tmax-width: 200px !important;
\t\t\t\twidth: 200px !important;
\t\t\t}
\t\t\t.ie .wide {
\t\t\t\twidth: 400px !important;
\t\t\t}
\t\t\t.ie .stack.fixed-width.has-border,
\t\t\t.ie .stack.has-gutter.has-border {
\t\t\t\tmax-width: 602px !important;
\t\t\t\twidth: 602px !important;
\t\t\t}
\t\t\t.ie .stack.two-col.has-gutter .column {
\t\t\t\tmax-width: 290px !important;
\t\t\t\twidth: 290px !important;
\t\t\t}
\t\t\t.ie .stack.three-col.has-gutter .column,
\t\t\t.ie .stack.has-gutter .narrow {
\t\t\t\tmax-width: 188px !important;
\t\t\t\twidth: 188px !important;
\t\t\t}
\t\t\t.ie .stack.has-gutter .wide {
\t\t\t\tmax-width: 394px !important;
\t\t\t\twidth: 394px !important;
\t\t\t}
\t\t\t.ie .stack.two-col.has-gutter.has-border .column {
\t\t\t\tmax-width: 292px !important;
\t\t\t\twidth: 292px !important;
\t\t\t}
\t\t\t.ie .stack.three-col.has-gutter.has-border .column,
\t\t\t.ie .stack.has-gutter.has-border .narrow {
\t\t\t\tmax-width: 190px !important;
\t\t\t\twidth: 190px !important;
\t\t\t}
\t\t\t.ie .stack.has-gutter.has-border .wide {
\t\t\t\tmax-width: 396px !important;
\t\t\t\twidth: 396px !important;
\t\t\t}
\t\t\t.ie .fixed-width .layout__inner {
\t\t\t\tborder-left: 0 none white !important;
\t\t\t\tborder-right: 0 none white !important;
\t\t\t}
\t\t\t.ie .layout__edges {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.mso .layout__edges {
\t\t\t\tfont-size: 0;
\t\t\t}
\t\t\t.layout-fixed-width,
\t\t\t.mso .layout-full-width {
\t\t\t\tbackground-color: #ffffff;
\t\t\t}
\t\t\t@media only screen and(min-width: 620px) {
\t\t\t\t.column,
\t\t\t\t.gutter {
\t\t\t\t\tdisplay: table-cell;
\t\t\t\t\tFloat: none !important;
\t\t\t\t\tvertical-align: top;
\t\t\t\t}
\t\t\t\tdiv.preheader,
\t\t\t\t.email-footer {
\t\t\t\t\tmax-width: 560px !important;
\t\t\t\t\twidth: 560px !important;
\t\t\t\t}
\t\t\t\t.snippet,
\t\t\t\t.webversion {
\t\t\t\t\twidth: 280px !important;
\t\t\t\t}
\t\t\t\tdiv.header,
\t\t\t\t.layout,
\t\t\t\t.one-col .column {
\t\t\t\t\tmax-width: 600px !important;
\t\t\t\t\twidth: 600px !important;
\t\t\t\t}
\t\t\t\t.fixed-width.has-border,
\t\t\t\t.fixed-width.x_has-border,
\t\t\t\t.has-gutter.has-border,
\t\t\t\t.has-gutter.x_has-border {
\t\t\t\t\tmax-width: 602px !important;
\t\t\t\t\twidth: 602px !important;
\t\t\t\t}
\t\t\t\t.two-col .column {
\t\t\t\t\tmax-width: 300px !important;
\t\t\t\t\twidth: 300px !important;
\t\t\t\t}
\t\t\t\t.three-col .column,
\t\t\t\t.column.narrow,
\t\t\t\t.column.x_narrow {
\t\t\t\t\tmax-width: 200px !important;
\t\t\t\t\twidth: 200px !important;
\t\t\t\t}
\t\t\t\t.column.wide,
\t\t\t\t.column.x_wide {
\t\t\t\t\twidth: 400px !important;
\t\t\t\t}
\t\t\t\t.two-col.has-gutter .column,
\t\t\t\t.two-col.x_has-gutter .column {
\t\t\t\t\tmax-width: 290px !important;
\t\t\t\t\twidth: 290px !important;
\t\t\t\t}
\t\t\t\t.three-col.has-gutter .column,
\t\t\t\t.three-col.x_has-gutter .column,
\t\t\t\t.has-gutter .narrow {
\t\t\t\t\tmax-width: 188px !important;
\t\t\t\t\twidth: 188px !important;
\t\t\t\t}
\t\t\t\t.has-gutter .wide {
\t\t\t\t\tmax-width: 394px !important;
\t\t\t\t\twidth: 394px !important;
\t\t\t\t}
\t\t\t\t.two-col.has-gutter.has-border .column,
\t\t\t\t.two-col.x_has-gutter.x_has-border .column {
\t\t\t\t\tmax-width: 292px !important;
\t\t\t\t\twidth: 292px !important;
\t\t\t\t}
\t\t\t\t.three-col.has-gutter.has-border .column,
\t\t\t\t.three-col.x_has-gutter.x_has-border .column,
\t\t\t\t.has-gutter.has-border .narrow,
\t\t\t\t.has-gutter.x_has-border .narrow {
\t\t\t\t\tmax-width: 190px !important;
\t\t\t\t\twidth: 190px !important;
\t\t\t\t}
\t\t\t\t.has-gutter.has-border .wide,
\t\t\t\t.has-gutter.x_has-border .wide {
\t\t\t\t\tmax-width: 396px !important;
\t\t\t\t\twidth: 396px !important;
\t\t\t\t}
\t\t\t}
\t\t\t@supports(display: flex) {
\t\t\t\t@media only screen and(min-width: 620px) {
\t\t\t\t\t.fixed-width.has-border .layout__inner {
\t\t\t\t\t\tdisplay: flex !important;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t@media only screen and(-webkit-min-device-pixel-ratio: 2),
\t\t\tonly screen and(min--moz-device-pixel-ratio: 2),
\t\t\tonly screen and(-o-min-device-pixel-ratio: 2 / 1),
\t\t\tonly screen and(min-device-pixel-ratio: 2),
\t\t\tonly screen and(min-resolution: 192dpi),
\t\t\tonly screen and(min-resolution: 2dppx) {
\t\t\t\t.fblike {
\t\t\t\t\tbackground-image: url('https://i7.createsend1.com/static/eb/master/13-the-blueprint-3/images/fblike@2x.png') !important;
\t\t\t\t}
\t\t\t\t.tweet {
\t\t\t\t\tbackground-image: url('https://i10.createsend1.com/static/eb/master/13-the-blueprint-3/images/tweet@2x.png') !important;
\t\t\t\t}
\t\t\t\t.linkedinshare {
\t\t\t\t\tbackground-image: url('https://i8.createsend1.com/static/eb/master/13-the-blueprint-3/images/lishare@2x.png') !important;
\t\t\t\t}
\t\t\t\t.forwardtoafriend {
\t\t\t\t\tbackground-image: url('https://i9.createsend1.com/static/eb/master/13-the-blueprint-3/images/forward@2x.png') !important;
\t\t\t\t}
\t\t\t}
\t\t\t@media(max-width: 321px) {
\t\t\t\t.fixed-width.has-border .layout__inner {
\t\t\t\t\tborder-width: 1px 0 !important;
\t\t\t\t}
\t\t\t\t.layout,
\t\t\t\t.stack .column {
\t\t\t\t\tmin-width: 320px !important;
\t\t\t\t\twidth: 320px !important;
\t\t\t\t}
\t\t\t\t.border {
\t\t\t\t\tdisplay: none;
\t\t\t\t}
\t\t\t\t.has-gutter .border {
\t\t\t\t\tdisplay: table-cell;
\t\t\t\t}
\t\t\t}
\t\t\t@media(max-width: 619px) {
\t\t\t\t.email-flexible-footer .left-aligned-footer .column,
\t\t\t\t.email-flexible-footer .center-aligned-footer,
\t\t\t\t.email-flexible-footer .right-aligned-footer .column {
\t\t\t\t\t/*Overriding inline styles for mobile compatiability*/
\t\t\t\t\ttext-align: center !important;
\t\t\t\t\tmax-width: calc(100% - 40px) !important;
\t\t\t\t\twidth: calc(100% - 40px);
\t\t\t\t\tmargin-left: 20px;
\t\t\t\t\tmargin-right: 20px;
\t\t\t\t}
\t\t\t\t.email-flexible-footer .footer__share-button {
\t\t\t\t\tmax-width: 280px;
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t}
\t\t\t\t.email-flexible-footer .left-aligned-footer .flexible-footer__share-button__container,
\t\t\t\t.email-flexible-footer .center-aligned-footer .flexible-footer__share-button__container,
\t\t\t\t.email-flexible-footer .right-aligned-footer .flexible-footer__share-button__container {
\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t/*Overriding inline styles for mobile compatiability*/
\t\t\t\t\tmargin-left: 5px !important;
\t\t\t\t\tmargin-right: 5px !important;
\t\t\t\t}
\t\t\t}
\t\t\t.mso div {
\t\t\t\tborder: 0 none white !important;
\t\t\t}
\t\t\t.mso .w560 .divider {
\t\t\t\tMargin-left: 260px !important;
\t\t\t\tMargin-right: 260px !important;
\t\t\t}
\t\t\t.mso .w360 .divider {
\t\t\t\tMargin-left: 160px !important;
\t\t\t\tMargin-right: 160px !important;
\t\t\t}
\t\t\t.mso .w260 .divider {
\t\t\t\tMargin-left: 110px !important;
\t\t\t\tMargin-right: 110px !important;
\t\t\t}
\t\t\t.mso .w160 .divider {
\t\t\t\tMargin-left: 60px !important;
\t\t\t\tMargin-right: 60px !important;
\t\t\t}
\t\t\t.mso .w354 .divider {
\t\t\t\tMargin-left: 157px !important;
\t\t\t\tMargin-right: 157px !important;
\t\t\t}
\t\t\t.mso .w250 .divider {
\t\t\t\tMargin-left: 105px !important;
\t\t\t\tMargin-right: 105px !important;
\t\t\t}
\t\t\t.mso .w148 .divider {
\t\t\t\tMargin-left: 54px !important;
\t\t\t\tMargin-right: 54px !important;
\t\t\t}
\t\t\t.mso .size-8,
\t\t\t.ie .size-8 {
\t\t\t\tfont-size: 8px !important;
\t\t\t\tline-height: 14px !important;
\t\t\t}
\t\t\t.mso .size-9,
\t\t\t.ie .size-9 {
\t\t\t\tfont-size: 9px !important;
\t\t\t\tline-height: 16px !important;
\t\t\t}
\t\t\t.mso .size-10,
\t\t\t.ie .size-10 {
\t\t\t\tfont-size: 10px !important;
\t\t\t\tline-height: 18px !important;
\t\t\t}
\t\t\t.mso .size-11,
\t\t\t.ie .size-11 {
\t\t\t\tfont-size: 11px !important;
\t\t\t\tline-height: 19px !important;
\t\t\t}
\t\t\t.mso .size-12,
\t\t\t.ie .size-12 {
\t\t\t\tfont-size: 12px !important;
\t\t\t\tline-height: 19px !important;
\t\t\t}
\t\t\t.mso .size-13,
\t\t\t.ie .size-13 {
\t\t\t\tfont-size: 13px !important;
\t\t\t\tline-height: 21px !important;
\t\t\t}
\t\t\t.mso .size-14,
\t\t\t.ie .size-14 {
\t\t\t\tfont-size: 14px !important;
\t\t\t\tline-height: 21px !important;
\t\t\t}
\t\t\t.mso .size-15,
\t\t\t.ie .size-15 {
\t\t\t\tfont-size: 15px !important;
\t\t\t\tline-height: 23px !important;
\t\t\t}
\t\t\t.mso .size-16,
\t\t\t.ie .size-16 {
\t\t\t\tfont-size: 16px !important;
\t\t\t\tline-height: 24px !important;
\t\t\t}
\t\t\t.mso .size-17,
\t\t\t.ie .size-17 {
\t\t\t\tfont-size: 17px !important;
\t\t\t\tline-height: 26px !important;
\t\t\t}
\t\t\t.mso .size-18,
\t\t\t.ie .size-18 {
\t\t\t\tfont-size: 18px !important;
\t\t\t\tline-height: 26px !important;
\t\t\t}
\t\t\t.mso .size-20,
\t\t\t.ie .size-20 {
\t\t\t\tfont-size: 20px !important;
\t\t\t\tline-height: 28px !important;
\t\t\t}
\t\t\t.mso .size-22,
\t\t\t.ie .size-22 {
\t\t\t\tfont-size: 22px !important;
\t\t\t\tline-height: 31px !important;
\t\t\t}
\t\t\t.mso .size-24,
\t\t\t.ie .size-24 {
\t\t\t\tfont-size: 24px !important;
\t\t\t\tline-height: 32px !important;
\t\t\t}
\t\t\t.mso .size-26,
\t\t\t.ie .size-26 {
\t\t\t\tfont-size: 26px !important;
\t\t\t\tline-height: 34px !important;
\t\t\t}
\t\t\t.mso .size-28,
\t\t\t.ie .size-28 {
\t\t\t\tfont-size: 28px !important;
\t\t\t\tline-height: 36px !important;
\t\t\t}
\t\t\t.mso .size-30,
\t\t\t.ie .size-30 {
\t\t\t\tfont-size: 30px !important;
\t\t\t\tline-height: 38px !important;
\t\t\t}
\t\t\t.mso .size-32,
\t\t\t.ie .size-32 {
\t\t\t\tfont-size: 32px !important;
\t\t\t\tline-height: 40px !important;
\t\t\t}
\t\t\t.mso .size-34,
\t\t\t.ie .size-34 {
\t\t\t\tfont-size: 34px !important;
\t\t\t\tline-height: 43px !important;
\t\t\t}
\t\t\t.mso .size-36,
\t\t\t.ie .size-36 {
\t\t\t\tfont-size: 36px !important;
\t\t\t\tline-height: 43px !important;
\t\t\t}
\t\t\t.mso .size-40,
\t\t\t.ie .size-40 {
\t\t\t\tfont-size: 40px !important;
\t\t\t\tline-height: 47px !important;
\t\t\t}
\t\t\t.mso .size-44,
\t\t\t.ie .size-44 {
\t\t\t\tfont-size: 44px !important;
\t\t\t\tline-height: 50px !important;
\t\t\t}
\t\t\t.mso .size-48,
\t\t\t.ie .size-48 {
\t\t\t\tfont-size: 48px !important;
\t\t\t\tline-height: 54px !important;
\t\t\t}
\t\t\t.mso .size-56,
\t\t\t.ie .size-56 {
\t\t\t\tfont-size: 56px !important;
\t\t\t\tline-height: 60px !important;
\t\t\t}
\t\t\t.mso .size-64,
\t\t\t.ie .size-64 {
\t\t\t\tfont-size: 64px !important;
\t\t\t\tline-height: 63px !important;
\t\t\t}
\t\t</style>

\t\t<style>
\t\t\ttype=\"text/css\" .main,
\t\t\t.mso {
\t\t\t\tbackground-color: #2B54CC
\t\t\t}
\t\t\t.logo a:hover,
\t\t\t.logo a:focus {
\t\t\t\tcolor: #2B54CC !important
\t\t\t}
\t\t\t.footer-logo a:hover,
\t\t\t.footer-logo a:focus {
\t\t\t\tcolor: #2B54CC !important
\t\t\t}
\t\t\t.mso .layout-has-border {
\t\t\t\tborder-top: 1px solid #ccc;
\t\t\t\tborder-bottom: 1px solid #2B54CC
\t\t\t}
\t\t\t.mso .layout-has-bottom-border {
\t\t\t\tborder-bottom: 1px solid #2B54CC
\t\t\t}
\t\t\t.mso .border,
\t\t\t.ie .border {
\t\t\t\tbackground-color: #2B54CC
\t\t\t}
\t\t\t.mso h1,
\t\t\t.ie h1 {}
\t\t\t.mso h1,
\t\t\t.ie h1 {
\t\t\t\tfont-size: 56px !important;
\t\t\t\tline-height: 60px !important
\t\t\t}
\t\t\t.mso h2,
\t\t\t.ie h2 {}
\t\t\t.mso h2,
\t\t\t.ie h2 {
\t\t\t\tfont-size: 32px !important;
\t\t\t\tline-height: 40px !important
\t\t\t}
\t\t\t.mso h3,
\t\t\t.ie h3 {}
\t\t\t.mso .layout__inner,
\t\t\t.ie .layout__inner {}
\t\t\t.mso .footer__share-button p {}
\t\t\t.mso .footer__share-button p {
\t\t\t\tfont-family: Avenir, sans-serif
\t\t\t}
\t\t</style><meta name=\"robots\" content=\"noindex,nofollow\"/>
\t\t<meta property=\"og:title\" content=\"My First Campaign\"/>
\t</head>
\t<!--[if mso]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<body class=\"mso\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<![endif]-->
\t<!--[if !mso]><!-->
\t<body
\t\tclass=\"main no-padding\" style=\"margin: 0;padding: 0;-webkit-text-size-adjust: 100%;\">
\t\t<!--<![endif]-->
\t\t<table class=\"wrapper\" style=\"border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #2B54CC;\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div role=\"banner\">
\t\t\t\t\t\t\t<div class=\"preheader\" style=\"Margin: 0 auto;max-width: 560px;min-width: 280px; width: 280px;width: calc(28000% - 167440px);\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tstyle=\"border-collapse: collapse;display: table;width: 100%;\">
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" class=\"preheader\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr><td style=\"width: 280px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t<div class=\"snippet\" style=\"display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 140px; width: 140px;width: calc(14000% - 78120px);padding: 10px 0 5px 0;color: #999;font-family: Avenir,sans-serif;\"></div>
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td><td style=\"width: 280px\" valign=\"top\"><![endif]-->
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"header\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\" id=\"emb-email-header-container\">
\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" class=\"header\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr><td style=\"width: 600px\"><![endif]-->
\t\t\t\t\t\t\t\t<div class=\"logo emb-logo-margin-box\" style=\"font-size: 26px;line-height: 32px;Margin-top: 6px;Margin-bottom: 20px;color: #ffffff;font-family: Avenir,sans-serif;Margin-left: 20px;Margin-right: 20px;\" align=\"center\">
\t\t\t\t\t\t\t\t\t<div class=\"logo-center\" align=\"center\" id=\"emb-email-header\"><img style=\"display: block;height: auto;width: 100%;border: 0;max-width: 81px;\" src=\"images/log.png\" alt=\"\" width=\"81\"/></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"layout one-col fixed-width stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t\t\t\t\t<div<![endif]-- <!--[if (mso)|(IE)]> <table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"> <tr class=\"layout-fixed-width\"> <td style=\"width: 600px\" class=\"w560\">>
\t\t\t\t\t\t\t\t\t<div class=\"column\" style=\"text-align: left;color: #FFFFFF;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;\">

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 40px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div>

\t\t\t\t\t\t\t<div class=\"layout one-col fixed-width stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;background-color: #FFFFFF;\">
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr class=\"layout-fixed-width\" style=\"background-color: #2B54CC;\"><td style=\"width: 600px\" class=\"w560\"><![endif]-->
\t\t\t\t\t\t\t\t\t<div class=\"column\" style=\"text-align: left;color: #000;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;\">

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;mso-text-raise: 11px;vertical-align: middle;\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"size-36\" style=\"mso-text-raise: 13px;Margin-top: 0;Margin-bottom: 20px;font-style: normal;font-weight: normal;color: #2B54CC;font-size: 30px;line-height: 38px;text-align: center;\" lang=\"x-size-36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>R&#233;clamation ajout&#233;e</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;mso-text-raise: 11px;vertical-align: middle;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"Margin-top: 0;Margin-bottom: 20px;font-family: courier new,courier,monospace;text-align: center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-courier\">Nous voulons vous informer qu'une nouvelle r&#233;clamation  est ajout&#233;e. N'h&#233;sitez par de visiter votre espace pour plus d'information.</span>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn btn--flat btn--large\" style=\"text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t<![if !mso]>
\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"border-radius: 0;display: inline-block;font-size: 14px;font-weight: bold;line-height: 24px;padding: 12px 24px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #ffffff !important;background-color: #418812;font-family: Avenir, sans-serif;\" href=\"http://localhost/Pidev_symfony_TANYT/public/index.php/connexion\">
\t\t\t\t\t\t\t\t\t\t\t\t\tAcc&#233;der a votre espace</a>
\t\t\t\t\t\t\t\t\t\t\t\t<![endif]>
\t\t\t\t\t\t\t\t\t\t\t\t<!--[if mso]><p style=\"line-height:0;margin:0;\">&nbsp;</p><v:rect xmlns:v=\"urn:schemas-microsoft-com:vml\" href=\"\" style=\"width:157px\" fillcolor=\"#418812\" stroke=\"f\"><v:textbox style=\"mso-fit-shape-to-text:t\" inset=\"0px,12px,0px,12px\"><center style=\"font-size:14px;line-height:24px;color:#FFFFFF;font-family:Avenir,sans-serif;font-weight:bold;mso-line-height-rule:exactly;mso-text-raise:4px\">Visiter notre site</center></v:textbox></v:rect><![endif]-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div>

\t\t\t\t\t\t\t<div class=\"layout one-col fixed-width stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t\t\t\t\t<div class=\"column\" style=\"text-align: left;color: #000;font-size: 16px;line-height: 24px;font-family: Avenir,sans-serif;\">

\t\t\t\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 61px;font-size: 1px;\">&nbsp;</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</div>
\t\t<div role=\"contentinfo\">
\t\t\t<div class=\"layout email-footer stack\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t<div
\t\t\t\t\tclass=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\">
\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr class=\"layout-email-footer\"><td style=\"width: 400px;\" valign=\"top\" class=\"w360\"><![endif]-->
\t\t\t\t\t<div class=\"column wide\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #999;font-family: Avenir,sans-serif;Float: left;max-width: 400px;min-width: 320px; width: 320px;width: calc(8000% - 47600px);\">
\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\">

\t\t\t\t\t\t\t<div style=\"font-size: 12px;line-height: 19px;margin-bottom: 15px;\"></div>
\t\t\t\t\t\t\t<div style=\"font-size: 12px;line-height: 19px;margin-bottom: 15px;Margin-top: 18px;\"></div>
\t\t\t\t\t\t\t<!--[if mso]>&nbsp;<![endif]-->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"layout one-col email-footer\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\">
\t\t\t\t<div
\t\t\t\t\tclass=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\">
\t\t\t\t\t<!--[if (mso)|(IE)]><table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tr class=\"layout-email-footer\"><td style=\"width: 600px;\" class=\"w560\"><![endif]-->
\t\t\t\t\t<div class=\"column\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #999;font-family: Avenir,sans-serif;\">
\t\t\t\t\t\t<div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div style=\"line-height:40px;font-size:40px;\" id=\"footer-spacing\">&nbsp;</div>
\t</body>
</html></td></tr></tbody></table></body></html>
", "reclamation/email.html.twig", "C:\\xampp\\htdocs\\Pidev_symfony_TANYT\\templates\\reclamation\\email.html.twig");
    }
}
