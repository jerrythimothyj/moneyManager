angular.module("moneyManager").component("invoices", {
  templateUrl: "./client/views/components/invoices.html",
  bindings: {
    invoicesData: "="
  }
});
