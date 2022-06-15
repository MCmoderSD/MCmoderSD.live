<?php
header('content-type: text/css; charset=utf-8');
?>

#t{
  background-color: #36393f;
}

.runner-container{
  color: #fff;
  background-color: #fff;
}

a {
    color: #585858;
  }
  
  body {
    background-color: #f7f7f7;
    color: #585858;
    font-size: 125%;
  }
  
  body.safe-browsing {
    background-color: rgb(206, 52, 38);
    color: white;
  }
  
  button {
    background: rgb(76, 142, 250);
    border: 0;
    border-radius: 2px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    float: right;
    font-size: .875em;
    height: 36px;
    margin: -6px 0 0;
    padding: 8px 24px;
    transition: box-shadow 200ms cubic-bezier(0.4, 0, 0.2, 1);
  }
  
  [dir='rtl'] button {
    float: left;
  }
  
  button:active {
    background: rgb(50, 102, 213);
    outline: 0;
  }
  
  button:hover {
    box-shadow: 0 1px 3px rgba(0, 0, 0, .50);
  }
  
  .debugging-content {
    line-height: 1em;
    margin-bottom: 0;
    margin-top: 0;
  }
  
  .debugging-title {
    font-weight: bold;
  }
  
  #details {
    color: #696969;
    margin: 45px 0 50px;
  }
  
  #details p:not(:first-of-type) {
    margin-top: 20px;
  }
  
  #error-code {
    color: black;
    opacity: .35;
    text-transform: uppercase;
  }
  
  #error-debugging-info {
    font-size: 0.8em;
  }
  
  h1 {
    -webkit-margin-after: 16px;
    color: #585858;
    font-size: 1.6em;
    font-weight: normal;
    line-height: 1.25em;
  }
  
  h2 {
    font-size: 1.2em;
    font-weight: normal;
  }
  
  .hidden {
    display: none;
  }
  
  .icon {
    background-repeat: no-repeat;
    background-size: 100%;
    height: 72px;
    margin: 0 0 40px;
    width: 72px;
  }
  
  input[type=checkbox] {
    visibility: hidden;
  }
  
  .interstitial-wrapper {
    box-sizing: border-box;
    font-size: 1em;
    line-height: 1.6em;
    margin: 50px auto 0;
    max-width: 600px;
    width: 100%;
  }
  
  #malware-opt-in {
    font-size: .875em;
    margin-top: 39px;
  }
  
  .nav-wrapper {
    margin-top: 51px;
  }
  
  .nav-wrapper::after {
    clear: both;
    content: '';
    display: table;
    width: 100%;
  }
  
  #opt-in-label {
    -webkit-margin-start: 32px;
  }
  
  .safe-browsing :-webkit-any(
      a, #details, #details-button, h1, h2, p, .small-link) {
    color: white;
  }
  
  .safe-browsing button {
    background-color: rgb(206, 52, 38);
    border: 1px solid white;
  }
  
  .safe-browsing button:active {
    background-color: rgb(206, 52, 38);
    border-color: rgba(255, 255, 255, .6);
  }
  
  .safe-browsing button:hover {
    box-shadow: 0 2px 3px rgba(0, 0, 0, .5);
  }
  
  .safe-browsing .icon {
    background-image: -webkit-image-set(
        url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAMAAABiM0N1AAABoVBMVEX///+Li4v////////y8vL09PT99fTbRDfXzMzt7e3v7+/s7Ozy8vLw8PDu7u799PPSQTXx8fHZdGv19fX09PTm5ubbV0zXzczgW1Dd3d3c3Nzjb2Th4eHr6+vl5eXp6enZ2dng4OD29vbz8/PYYFXZV0zaYVbjbWP219TRQTTXdGz43Nn++/rib2T////b29vTQjXaYVf66ObngXjjbmTq6ura2trngHf76Ofk19bX19fe3t7o6Oji4uLk5OTeU0f119TYQzbZQzbWQjbXQzbZRDfaRDfn5+fbV0vj4+PVQjXf39/Y2Njgcmney8rqk4zdysn43drcysjcUETa1tbadGvaV0vaWEzZYVbibmXc2NjfzMvi0M7mfHPYYVbhzszd2dnZx8XieXDkc2nWX1Xacmne2trZdGzbcWjj0c/XTUHX1NPVX1Xg3NzYdGvYXFHZ1dXWTUHgzczUX1Xh3d3XdWzWXFHaVkvXxcTVTEHhbmXTXlXi3t7ayMbVXFLgbmXUTEDXYFXSXlTXzMvk4ODUXFHWbGPWzMvk4eHZioP39/f9Ro5BAAAABnRSTlMAAOQk5ye8yu+CAAACRklEQVR4XrXWRZPbUBSEUWdmIpl5mJmZg8zMzMzMzPCr43isNqif76u6lW+nuzgrtUqB/1ptzUSVamrVDiS1A0ntQFI7kNQOJLUDSe1AUjuQ1A4ktQNJ70DSO5D0DiS9A0nvQIKjlOAoJThqyewsXZ1hQOL8YZNkcJrcJiIlBt2No0zKQSbHJVJiznW5BIg4kMocSDIEBxKcwvkoJAE6uMJAguO13xIaWyyRiDPdGGGQJBFnzb4Qh2Qp0VrmdHXFCSRKxFmYDAsQpNkSiTgtLZAAydIgcZqbYwQSJOqs3QsJkCRxp7s7RSBBok5bW5RAgkSd9bujIoS3AA0QZ0NHrx3ktLro5SvidNRnAUkO2nWZOPU7s4BEB9J74qzrzACSHNRwhDid8xlAogPpEHHa23sIxJyB60XpAHEioT9myBnf4XWq8W4aDw1niROKA/I7270u5HbxKI3Hk0+IEzZBzuktXn35XRw7jsOJi34nZoCcN5u9+gq7OJPGqf+czzFAzsdtXp+xi0tpHPtvVzopDl3Z6nUtWNzXjZs436p0DNDQnT0r3QuW7vT+g8L54XKlEzX8RAw9nvrX02D53p89z59f+J0602/NptfJZPKt52AX70Zy5w/EWR0wSp+Gv3z1f3++jQx/545Z+vGTfcd+/eYOJFIEDtkpccxSyNqRpLitI0uWjiyFLR1ZignOqoC1VN0BJEupag4gK8nsALKToiYHkK3Uyx0CiRJ3ANlLWe4AspcyxKGQLHEHkL3UQxwKyRJxCKTtLyVXfw+a8JTgAAAAAElFTkSuQmCC) 1x,
        url(data:image/png;base64,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) 2x);
  }
  
  .small-link {
    color: #696969;
    font-size: .875em;
  }
  
  .ssl .icon {
    background-image: -webkit-image-set(
        url(data:image/png;base64,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) 1x,
        url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQCAYAAADnRuK4AAAMFklEQVR4XuzcW2wUVRzH8fFSpaSx+AAJD5IqNcRSWhSkFwvEAFogKPWlxhivGC+JiAkaMBjC5UEjAU0E44sJMTGGKApeaKBdWtoCIj6B2AsYsRZDq7ZcWmnRHn9pJvnXTlDPzM7sOcffJt+XJs1mm09+szOdXU8pFTrGCCBKjIAYATECYgTECKh9foktjUEz0CNoPXofpdC36BT6BfUgNaJe1IGOo1r/d9ahh9Ed6PoMvyYCirFstAi9hY6iy0ilucvoqP8c96IxdgMioFy0DH2G+pBKuD70KXoMjbUHEAHNRNtRP1KG1IveRkXmAiKgOSiFlOF9jqabA4iApqAvkLKoIbQD5WcOEAFloXVoAClL60dr0LWIgBJenW+QcqSv0C2IgBLoHvQbUo71K7qbgOJtuVzDcbJB9DQBxdNaAeB8LxNQeluJ1P+sFwgoPT0bE4AutBdtQs+gJWgGmoRuRLkjAI/zf5aHSlAVeh5tRc3ofEyn+k8SULTmoT/SeMq8Ez2B8tKM/GpUjF5CTWgoTYgG0BwCCtdE1JUGOMfQU7IoiTQJbUBn04DoDBpPQHpdhWoiwmlF1f46eBlqLFqJeiIi2kVAej0a8VT4FZSFPEOagD6MiKiagP5buREOXR1oJvIM7XF0KSSgTpRDQP/e6yHxHEcTkWd4FREOaWsJ6J+bEPLmr3Z5o2lFJSFfZw/KIaArtyHk/5DykWdZ94W8RPEiAV35vuXuEICqkGdpG0MAOo2uI6BgD4bAswN5FpeFjoVAtJSAgu0Jcbo+GXmWVxkC0CcE9PfGoUFNQO8iz5FSIe5kzCEg6SGkNCtwCNDiaO/9COg9TTwHkedQ16AfNQFtIyDplCag5chzrNc0AZ1ABITGI6XZFAcBzdUE9Ce6gYBwk3yI6yCeg2WFuDEN6AjoOWev/ehXrwkId1IS0BuagNY4DGiLJqDNBISLYmHui3G0ZZqAPiIg/U+YznYY0Dz9T7QSUIcmoMkOAyrQBNRGQPpnHrkOA7pJE1A3AQGFZtkOA8oN8cVVBKSZ53DZmoAGCIiAIi2yFYAIiIAIiIAIiIAIqBC9ivaiTvQ7UpFi/egnVINWo6kuAlqCDhNAYjWihS4Ays/odzezGnSzrYCq0QUCyHjnUJVtgFajIQIwpiG0whZAqwjA2FaYDqja+OXhElUZCQgAbkUXCcD4elGeUYD8r6TbTwDWVGMaoAcIwLoqTQJ0hACs64ARgADgdgKwtttMALSeAKxtlQmA6gjA2r40AdDPBGBtP5gAaJAArO2iCYCUvTECYgTECMjGGAExAmIEZGmMgBgBMQKyNEZAjIAYAZncyYUVqn1BaWaeu7LCZkAEdHLRbNV35JA6t2d34oi633lTXWr7Tp1aOt8+QAQkePyHIEoIj//QQERApuIJIEoKjyBq0UBEQObhCSJKAE8Q0fdVCwIACMgWPEFECeGRzrecUO33B5aIgIzB87XgSQRREI91iAgIAUJgeZJC1L1ti/bzXmg9odoWzzUJEBfo7KaNSg0NJYdI8Gh3+oPtqr5smmqZN0sAEJD1iBLDs2/WVLXvzgJVX1ooiAjICURJ4QEihBoEEQE5gih+PD6g2uGmApEczgjIDUQxL4/gQaoOHZD3RATkFiLBA5BpXR4BhEoEEQG5hEjwxLA8giflJ4gIyAlEuEgY+/KkRtUoiAjIdkQokeWRCtV+1FRWJIhcB0RE0ZdH8PiVAlG5ICIgsxAZujyCp95PEBGQaYiMXZ76UTULIgIyDJGhyyM1DDdNEBGQcYgMXR7Bg4ZP7w/eVSyICMgoRGYuj+BBgqgViAjIkLq3bg4NqHPXxwIoxuUZWSM6JIjsB9QGALbWFR6PINoNREAR6/IIHiSIcDiL9jcgoLjw6COqxVpgjZC/QMBSF6gQgPxKAUgSTICDVEPZiAKQilRjeZEgIiB78QiinaoOiJLCg1STICIgS/EEEWEhYsYjgPwOV0wXRDYCIh7pDBClACDW5RlVc3mxILINUCsAWNBf7dpPi1tlFMdx+1IUFDrOTJLpxKaTZHRaF4JglYqgXfka3BSsXVhd6s434MadBQt2krT513Qmfwqt2mlVEEeQFrUFRYXBQq+/55555gfPSci9N5PkJtzF9w2EDyc554nCMwFE4508xCNhM+sA0T0gCvy5xALQKQCIddHx/PLF597OxQ8iwbt/+ZJXw9QQPDpBtORXBxLmQAKe5hoiIEICnFZeurFf2yA6+ULAzyYBNDY8u8BTwjZVwo3nzsXzkRFV15ZHw8MwiVjrREoy08epQ0SzAAja4xnwfBJx8hCPbYeIIk8i3oCW/GTrYg3mNXMuHCZwNJ4tBkQZIMoO/YwSQKPj0ZMnCzyrC0jwlP2eHxVRCDyDD4gtAELy+8dpy5ZP+XX9SZRNAE1w8hBP1uJhFRT1N9GDy196dUGkr88MeFw4TOAgBUfj2ZaIKK6AzOoYp34bafKYqXNUyh71yoiA+Np+96OoiC55DQAYgify5CEe1kbdoiBSn1cCaEQ8nDzEk1V49F81RkRUB4CamkJ6hR98A9KQ7Ba2xQiJiBJA45g8m8CxCTx+Agg5X2NAU3HaGXESaTxI40HEw4LjaRekXjFDRAkg9uPpU97jR3+Mhier8ZQH47GPppEm0aPt616jmBn75CGetI2I4gLIXD7j0E/vvgVED8c+eYiHr+73PiaiIHiaxZUJTh4C6vgJortAdC8B1BfRJCaPenUnogh4Al6fW0xdoBWkgil9UNupty6IEkB9EP3HrzPVz8BzBTiuAI+fABJQkkAClrIb0FRsxwUQ04j019bK/hvYsOsz8bBweNBAPJ2iBEQJIMZunX3d23uoEe0SD+BoPKWoePjyDkQXFKJHW33wTHjyEA/rFmMA6C7eXOLY7bNvENFYJw/xmKo5IiKeGE0e4kkABUQ0ickj5ZhB9PBG06sDT9U+np6Q9APqMtZ6qSlpSACCLCINqWBKSwKIuZAKGVsCaFg3X3tZTR5pwSaQgKXkBjRl23EDiBHTIrJwWNUEHMTDFB5EPIyAUn4tST+i5m1pv20nhScBFC4zvr8GGkQ8aPOw8DhVmTye5iT9gLqPZ+DfNoLiSUfC040DoB2sgrOQGdcyhRYO2kSydbkBjc3fuhjX+EUUFA/SeBDxsHB4UEQ8qJgAClUbiATOZPHUVcvYwqSGpCEBCLKINKS8KW0TRMzZxDLMIiqiBFD4sIEATng8bBHJVxdzIZnfPqzGBA8iHhYGDwqGx6ljKrKpA7oDALMWRrdFxICmJPH3D4uEp6bwDFjh2bA7EMAgd41nQMMUHr3KJ4CihvFt0ATDw/Qaz9Qf6GtM8CDiYWHwIOJxK7C+a3yR8Sts+oAeI29WJ1FpyB2oggLgQc4KzwbegBps6B2oBTjqBsQi4cEE+mfqgL47mX2AvFkN70H+Gq9XeR4SkV7jGfFICg8iHhYKDzo8PAS0GwdA15A3y3WBqBwFT0wmD0szi6jI2kBj6rAr0we0kf0QeTMeEK0YLIc1ebiF8QKtMQEIsog0pLxJPWMQU4EFwqMBnZs6oG83sivIm4d6QIQNTJILNFOQsIHlpGtOAgcpOGHxpA4VT8dtPbMwdUBQZBD15ggRsATCowHFZfIwfUDkIfE6AUwf0BnkzROiyrQmj19qUM4mlnau0S6mjF/bTSbQK7EB9M1G9giqI29euglEwDIADyOmpYOqTtzElv3qkrpGE1IKjYxH6o9nkwCmD8giehb9O0+IeuvHAGdx/5hoMEn6Et0fTy00npQ03snzJ3o6VoCIaPVt5M1TQCSTiCk8aJyTx/kxnWYWUYFtAYoNiJhsYE/QGQKIGaDbG6umc8ibp26+uGKQDJ48TEMCEGQRaUhrppQkgFhEPNuMeKT3CCCugKT30ZN5QtQDoqsAwSm0JClA4fCgEHiiTx7iiTsg9g76e+4mUY5w0AQmj65lKjAicpI70F/oTQKIM6CXVt2eQw3kzUlERDg6AEEWkYa0ZmINp2aeBcOD+uMpo2cIIOaAbgFNn46g06iLvHmot05EyMEjVSV9E1pDQfFEnzzbgPMqAcwqIF0aXUAVdB/tzS6iYwYHD4ooCB4UBQ/T29geNrFfURmdB6hFAoh//wP7Cc82cAc2XQAAAABJRU5ErkJggg==) 2x);
  }
  
  .styled-checkbox {
    float: left;
    height: 16px;
    margin-top: .36em;
    position: relative;
    width: 16px;
  }
  
  [dir='rtl'] .styled-checkbox {
    float: right;
  }
  
  .styled-checkbox label {
    background: transparent;
    border: white solid 1px;
    border-radius: 2px;
    height: 14px;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 14px;
  }
  
  .styled-checkbox label::after {
    background: transparent;
    border: 2px solid white;
    border-right-width: 0;
    border-top-width: 0;
    content: '';
    height: 4px;
    left: 2px;
    opacity: 0.3;
    position: absolute;
    top: 3px;
    transform: rotate(-45deg);
    width: 9px;
  }
  
  .styled-checkbox input[type=checkbox]:checked + label::after {
    opacity: 1;
  }
  
  @media (max-width: 700px) {
    .interstitial-wrapper {
      padding: 0 10%;
    }
  }
  
  @media (max-height: 600px) {
    .interstitial-wrapper {
      margin-top: 5px;
    }
  }
  
  @media (max-width: 400px) {
    button,
    [dir='rtl'] button {
      float: none;
      font-size: 1em;
      width: 100%;
    }
  
    #details {
      margin: 20px 0 20px 0;
    }
  
    #details p:not(:first-of-type) {
      margin-top: 10px;
    }
  
    #details-button {
      display: block;
      padding-top: 14px;
      text-align: center;
      width: 100%;
    }
  
    .interstitial-wrapper {
      padding: 0 5%;
    }
  
    #malware-opt-in {
      margin-top: 24px;
    }
  
    .nav-wrapper {
      margin-top: 30px;
    }
  
    .small-link {
      font-size: 1em;
    }
  }

.back {
  color: rgb(88, 101, 242);
  font-size: 32px;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  padding-top: 60px;
}

.back a {
  color: rgb(88, 101, 242);
  font-size: 32px;
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  padding-top: 60px;
}