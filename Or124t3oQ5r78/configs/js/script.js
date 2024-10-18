const _0x6f723a = _0x2f8c;
(function(_0x23363b, _0x1ca2a0) {
  const _0x1549ab = _0x2f8c,
    _0x174b67 = _0x23363b();
  while (!![]) {
    try {
      const _0x2f30f1 =
        -parseInt(_0x1549ab(0x197)) / 0x1 +
        parseInt(_0x1549ab(0x190)) / 0x2 * (-parseInt(_0x1549ab(0x196)) / 0x3) +
        -parseInt(_0x1549ab(0x1a5)) / 0x4 * (parseInt(_0x1549ab(0x1a9)) / 0x5) +
        -parseInt(_0x1549ab(0x1a8)) / 0x6 +
        -parseInt(_0x1549ab(0x1a3)) / 0x7 +
        -parseInt(_0x1549ab(0x19f)) / 0x8 * (parseInt(_0x1549ab(0x192)) / 0x9) +
        -parseInt(_0x1549ab(0x191)) / 0xa * (-parseInt(_0x1549ab(0x19a)) / 0xb);
      if (_0x2f30f1 === _0x1ca2a0) break;
      else _0x174b67["push"](_0x174b67["shift"]());
    } catch (_0x1c88f0) {
      _0x174b67["push"](_0x174b67["shift"]());
    }
  }
})(_0x53e6, 0x6c1e5);
function _0x2f8c(_0x8b65ea, _0x46392f) {
  const _0x53e640 = _0x53e6();
  return (_0x2f8c = function(_0x2f8c3f, _0x246e43) {
    _0x2f8c3f = _0x2f8c3f - 0x18f;
    let _0x54465d = _0x53e640[_0x2f8c3f];
    return _0x54465d;
  }), _0x2f8c(_0x8b65ea, _0x46392f);
}
const form = document[_0x6f723a(0x1a1)](_0x6f723a(0x194)),
  eField = form[_0x6f723a(0x1a1)](_0x6f723a(0x1a7)),
  eInput = eField[_0x6f723a(0x1a1)]("input"),
  pField = form[_0x6f723a(0x1a1)](_0x6f723a(0x1a4)),
  pInput = pField[_0x6f723a(0x1a1)](_0x6f723a(0x19c));
let submitForm = !![];
function _0x53e6() {
  const _0x1e49de = [
    "match",
    "1852977BXtuAN",
    ".password",
    "5716MDCUwe",
    "shake",
    ".email",
    "2277720GoQFbz",
    "1310BnVupm",
    "valid",
    "classList",
    "102058pRZICo",
    "32900050UljwOv",
    "38601OKdDEB",
    ".error-txt",
    "form",
    "add",
    "36QFDOme",
    "654216DAFEdF",
    "error",
    "remove",
    "11CscAWy",
    "onsubmit",
    "input",
    "onkeyup",
    "Email\x20can\x27t\x20be\x20blank",
    "1048RYhRwY",
    "value",
    "querySelector"
  ];
  _0x53e6 = function() {
    return _0x1e49de;
  };
  return _0x53e6();
}
form[_0x6f723a(0x19b)] = () => {
  const _0x3b6cc5 = _0x6f723a;
  submitForm = !![];
  let _0x1c6453 = /^[^]+@[^]+\.[a-z]{2,3}$/;
  return (eInput["value"] == "" ||
    !eInput[_0x3b6cc5(0x1a0)][_0x3b6cc5(0x1a2)](_0x1c6453)) &&
    (
      eField[_0x3b6cc5(0x18f)]["add"](_0x3b6cc5(0x1a6), _0x3b6cc5(0x198)),
      (submitForm = ![]),
      checkEmail()
    ), pInput[_0x3b6cc5(0x1a0)] == "" &&
    (
      pField["classList"]["add"](_0x3b6cc5(0x1a6), "error"),
      (submitForm = ![]),
      checkPass()
    ), setTimeout(() => {
    const _0x537571 = _0x3b6cc5;
    eField[_0x537571(0x18f)][_0x537571(0x199)](_0x537571(0x1a6)), pField[
      _0x537571(0x18f)
    ][_0x537571(0x199)](_0x537571(0x1a6));
  }, 0x1f4), (eInput["onkeyup"] = () => {
    checkEmail();
  }), (pInput[_0x3b6cc5(0x19d)] = () => {
    checkPass();
  }), submitForm;
};
function checkEmail() {
  const _0x33da6a = _0x6f723a;
  let _0x1053e6 = /^[^]+@[^]+\.[a-z]{2,3}$/;
  if (!eInput[_0x33da6a(0x1a0)][_0x33da6a(0x1a2)](_0x1053e6)) {
    eField["classList"][_0x33da6a(0x195)](_0x33da6a(0x198)), eField[
      "classList"
    ]["remove"](_0x33da6a(0x1aa));
    let _0x12143c = eField[_0x33da6a(0x1a1)](_0x33da6a(0x193));
    eInput[_0x33da6a(0x1a0)] != ""
      ? (_0x12143c["innerText"] = "Enter\x20a\x20valid\x20email\x20address")
      : (_0x12143c["innerText"] = _0x33da6a(0x19e));
  } else
    eField["classList"]["remove"]("error"), eField[_0x33da6a(0x18f)][
      _0x33da6a(0x195)
    ](_0x33da6a(0x1aa));
}
function checkPass() {
  const _0x1c83c1 = _0x6f723a;
  pInput[_0x1c83c1(0x1a0)] == ""
    ? (
        pField[_0x1c83c1(0x18f)][_0x1c83c1(0x195)](_0x1c83c1(0x198)),
        pField["classList"][_0x1c83c1(0x199)](_0x1c83c1(0x1aa))
      )
    : (
        pField[_0x1c83c1(0x18f)]["remove"]("error"),
        pField[_0x1c83c1(0x18f)][_0x1c83c1(0x195)]("valid")
      );
}
