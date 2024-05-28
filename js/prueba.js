class suma1 {
    constructor(numero3, numero4) {
        this.numero3 = numero3;
        this.numero4 = numero4;
    }

    sumaNumeros() {
        return this.numero3 + this.numero4;
    }



}
function sumarNumeros() {
    let var1 = parseInt(document.getElementById("primerNumero").value);
    let var2 = parseInt(document.getElementById("segundoNumero").value);

    let sumaObj = new suma1(var1,var2);

    document.getElementById("suma").innerText=sumaObj.sumaNumeros();
}
