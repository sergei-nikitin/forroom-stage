// AJAX send forms
jQuery(document).on("submit", ".ajax_form", function (e) {
  e.preventDefault();

  const form = jQuery(this);

  form.find("p.response").remove();

  jQuery
    .ajax({
      type: "POST",
      // url: 'https://s2.apix-drive.com/web-hooks/14521/nzb7ixqo',
      url: form.attr("action"),
      data: form.serialize(),
    })
    .done(function (data) {
      console.log(data);
      form.trigger("reset");
      form.find("button").after('<p class="response">' + data + "</p>");
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({ event: "" });
      if (form.attr("data-analitic") === "form-paket") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "form-paket" });
      } else if (form.attr("data-analitic") === "design-package") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "design-package" });
      } else if (form.attr("data-analitic") === "form-stili") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "form-stili" });
      } else if (form.attr("data-analitic") === "form-novostroy") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "form-novostroy" });
      } else if (form.attr("data-analitic") === "design-faq") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "design-faq" });
      } else if (form.attr("data-analitic-designer") === "form-footer") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "form-footer" });
      } else if (form.attr("data-analitic") === "form-main") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "form-main" });
      } else if (form.attr("data-analitic") === "test-final") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "test-final" });
      } else if (form.attr("data-analitic") === "contacts") {
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({ event: "contacts" });
      } else {
        console.log("");
      }
      // if (form.attr("data-id") === "forroom-form") {
      //   location.href = "https://www.forroom.com.ua/blagodarim-forroom/";
      // } else {
      //   location.href = "https://www.forroom.com.ua/blagodarim-forhouse/";
      // }
    })
    .fail(function (data) {
      form
        .find("button")
        .after('<p class="response fail">' + data.responseText + "</p>");
    });
});
