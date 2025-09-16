// Form dynamic
let script = document.currentScript;
const formAll = document.querySelectorAll("form");

const partnerInput = document.querySelectorAll('input[name="partnerId"]');
const partnerValue = Array.from(partnerInput).map((input) =>
  input.value.trim()
)[0];
const partners = Array.isArray(partnerValue) ? partnerValue : [partnerValue];

const SetPartner = {
  a: {
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  b: {
    offer_id: script.getAttribute("data-offer_id"),
  },
  c: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
  },
  d: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    ua: navigator.userAgent,
  },
  e: {
    offer_id: script.getAttribute("data-offer_id"),
  },
  f: {
    offer_id: script.getAttribute("data-offer_id"),
    token: script.getAttribute("data-token"),
    oid: script.getAttribute("data-oid"),
    ua: navigator.userAgent,
  },
  g: {
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  h: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  i: {
    target_hash: script.getAttribute("data-target_hash"),
  },
  j: {
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  k: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
  },
  l: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    oid: script.getAttribute("data-oid"),
  },
  m: {
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  n: {
    country: script.getAttribute("data-country"),
    offer_id: script.getAttribute("data-offer_id"),
  },
  o: {
    flow: script.getAttribute("data-flow"),
    ua: navigator.userAgent,
  },
  p: {
    offer_id: script.getAttribute("data-offer_id"),
  },
  q: {
    target_hash: script.getAttribute("data-target_hash"),
    country: script.getAttribute("data-country"),
    ua: navigator.userAgent,
  },
  r: {
    country: script.getAttribute("data-country"),
    offer_id: script.getAttribute("data-offer_id"),
  },
  s: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  t: {},
  u: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
    landing_url: script.getAttribute("data-landing_url"),
  },
  v: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  w: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
  },
  x: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    target_hash: script.getAttribute("data-target_hash"),
  },
  y: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
  },
  z: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
  },
  a2: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
    language: script.getAttribute("data-language"),
    price: script.getAttribute("data-price"),
    old_price: script.getAttribute("data-old_price"),
  },
  b2: {
    offer_id: script.getAttribute("data-offer_id"),
    country: script.getAttribute("data-country"),
  },
  c2: {
    target_hash: script.getAttribute("data-target_hash"),
    country: script.getAttribute("data-country"),
  },
  d2: {
    product_name: script.getAttribute("data-product_name"),
    product_article: script.getAttribute("data-product_article"),
    price: script.getAttribute("data-price"),
    country: script.getAttribute("data-country"),
  },
};

const partnerData = SetPartner[partnerValue];

const inputs = Object.entries(partnerData).map(([name, value]) => {
  const input = document.createElement("input");
  input.type = "hidden";
  input.name = `${name}`;
  input.value = value;
  return input;
});

formAll.forEach((form) => {
  inputs.forEach((input) => {
    form.appendChild(input.cloneNode());
  });
});

/* ЧЕГО НЕТ в HTML:
	cc
	inb_v2
*/
