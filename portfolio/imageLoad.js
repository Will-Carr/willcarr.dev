var _slicedToArray = (function () {
  function sliceIterator(arr, i) {
    var _arr = [];
    var _n = true;
    var _d = false;
    var _e = undefined;
    try {
      for (
        var _i = arr[Symbol.iterator](), _s;
        !(_n = (_s = _i.next()).done);
        _n = true
      ) {
        _arr.push(_s.value);
        if (i && _arr.length === i) break;
      }
    } catch (err) {
      _d = true;
      _e = err;
    } finally {
      try {
        if (!_n && _i["return"]) _i["return"]();
      } finally {
        if (_d) throw _e;
      }
    }
    return _arr;
  }
  return function (arr, i) {
    if (Array.isArray(arr)) {
      return arr;
    } else if (Symbol.iterator in Object(arr)) {
      return sliceIterator(arr, i);
    } else {
      throw new TypeError(
        "Invalid attempt to destructure non-iterable instance"
      );
    }
  };
})();

if (!Object.entries) {
  Object.entries = function (obj) {
    var ownProps = Object.keys(obj),
      i = ownProps.length,
      resArray = new Array(i); // preallocate the Array
    while (i--) resArray[i] = [ownProps[i], obj[ownProps[i]]];

    return resArray;
  };
}

if (!Object.keys) {
  Object.keys = (function () {
    "use strict";
    var hasOwnProperty = Object.prototype.hasOwnProperty,
      hasDontEnumBug = !{ toString: null }.propertyIsEnumerable("toString"),
      dontEnums = [
        "toString",
        "toLocaleString",
        "valueOf",
        "hasOwnProperty",
        "isPrototypeOf",
        "propertyIsEnumerable",
        "constructor",
      ],
      dontEnumsLength = dontEnums.length;

    return function (obj) {
      if (
        typeof obj !== "function" &&
        (typeof obj !== "object" || obj === null)
      ) {
        throw new TypeError("Object.keys called on non-object");
      }

      var result = [],
        prop,
        i;

      for (prop in obj) {
        if (hasOwnProperty.call(obj, prop)) {
          result.push(prop);
        }
      }

      if (hasDontEnumBug) {
        for (i = 0; i < dontEnumsLength; i++) {
          if (hasOwnProperty.call(obj, dontEnums[i])) {
            result.push(dontEnums[i]);
          }
        }
      }
      return result;
    };
  })();
}

var projects = {
  "josh-green": "joshgreen",
  "will-carr-dev": "willcarrdev",
  bullseye: "bullseye",
  "degaetano-carr": "degaetanocarr",
  dominos: "dominos",
  "team-lyders": "teamlyders",
  asterisk: "asterisk",
  konstru: "konstru",
};
var extensions = {
  webp: 4,
  jp2: 3,
  jxr: 2,
  png: 1,
};

// All this is needed because of a chrome bug
// https://stackoverflow.com/questions/58215104/whats-the-neterr-http2-protocol-error-about
Object.entries(projects).forEach(function (_ref) {
  var _ref2 = _slicedToArray(_ref, 2);

  var divId = _ref2[0];
  var urlFrag = _ref2[1];

  var bgImgs = [];
  var bgImgUrls = [];
  Object.keys(extensions).forEach(function (extension) {
    var retryCount = 0;
    var imageUrl = "/images/" + urlFrag + "." + extension;
    var preloaderImg = document.createElement("img");
    preloaderImg.src = imageUrl;

    preloaderImg.addEventListener("load", function () {
      bgImgs.push(imageUrl);
      bgImgs.sort(function (img1, img2) {
        return extensions[img1.split(".")[1]] > extensions[img2.split(".")[1]]
          ? 1
          : -1;
      });

      bgImgUrls = bgImgs.map(function (img) {
        return "url(" + img + ")";
      });

      $("#" + divId + " .project-image").css(
        "background-image",
        bgImgUrls.join(", ")
      );
      preloaderImg = null;
    });

    preloaderImg.addEventListener("error", function () {
      if (retryCount < 3) {
        retryCount++;
        preloaderImg.src = imageUrl + "?retry=" + retryCount;
      } else {
        preloaderImg = null;
      }
    });
  });
});
