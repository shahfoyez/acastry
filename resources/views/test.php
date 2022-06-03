<div class="foy-copy">
    <input id="myInput" class="foy-cc-input" type="text" value="SAVEU99" readonly>
    <button class="foy-copy-button" id="btn-copy" onclick=" myFunction()">Copy</button>
</div>

<script>
    function myFunction() {
    var copyText = document.getElementById("myInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        document.getElementById("btn-copy").innerHTML="Copied";
    }
</script>
.foy-copy {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 60%;
}
.foy-copy input#myInput {
    width: 100%;
    height: 50px;
    text-align:center;
    box-sizing: border-box;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    font-size: 24px;
    line-height: 29px;
    color: #000000;
        padding: 20px;
    background: #FFFFFF;
    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px  0 0 10px;
}
button.foy-copy-button {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 24px;
    color: #fff;
    background: linear-gradient(243.88deg, #FE7439 0.92%, #E03F53 71.77%);
    border-radius: 0px 10px 10px 0px;
    width: 188px;
    height: 50px;
    border: none;
}
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .foy-copy {
    width: 80% !important;
}
}
/*@media only screen and (min-width: 320px) and (max-width: 640px) {*/

/*	.foy-cc-input {*/
/*            border-radius: 0px 0 0 0px !important; */
/*            padding: 16px !important;*/
/*            margin-left: 27px !important;*/
/*	}*/
/*}*/
/*@media only screen and (min-width: 320px) and (max-width: 640px) {*/

/*	.foy-copy-button {*/
/*             padding: 18px 110px !important;*/
/*             border-radius: 0 0px 0px 0 !important;*/
/*             margin-left: 26px !important;*/
/*	}*/
/*}*/
/*@media only screen and (min-width: 768px) and (max-width: 991px) {	*/
/*	.foy-cc-input{*/
/*		border-radius: 0px 0 0 0px !important;*/
/*		padding: 16px !important;*/
/*	}*/
/*}*/
@media only screen and (min-width: 320px) and (max-width: 1023px) {
    .foy-copy {
    width: 100%;
}
}
