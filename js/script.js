const listaDeNatal = [["Pão", 13], ["Salsichão", 49], ["Açougue", 222], ["Maionese", 8], ["Farofa", 6]]

function totalizar(arg) {
    let total = 0;
    for (let i = 0; i < arg.length; i++) {
        total = total + arg[i][1]
    }
    return total;
}

console.log('O total da lista de Natal foi ${totalizar(listaDeNatal)} e a parte de cada um é ${Math.round(totalizar(listaDeNatal)/6)}')