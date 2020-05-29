var Mousse = {
    titulo: "Mousse de Limão",
    porcao: 1,
    ingredientes: ["1 lata de leite condensado",
                     "1 lata de creme de leite",
                     "1/2 xícara de suco de limão"]

}
console.log(titulo);
console.log(porcao);
for (i=0; i<ingredientes.length; i++){
    console.log(Mousse.ingredientes[i])
}

var livro = [
    {
        id:1,
        title: "A Game of Thrones",
        Autor: " George R. R. Martin",
        lido: true
    },
    {
        id:2,
        title: "A Clash of Kings",
        Autor: " George R. R. Martin",
        lido: true
    },
    {
        id:3,
        title: "A Storm of Swords",
        Autor: " George R. R. Martin",
        lido: false
    },
    {
        id:4,
        title: "A Feast for Crows",
        Autor: " George R. R. Martin",
        lido: true
    },
    {
        id:5,
        title: "	A Dance with Dragons",
        Autor: " George R. R. Martin",
        lido: false
    },
   
];

livro.foreach(livro =>{
    console.log(livro.title);
    console.log(livro.Autor);
    if(livro.lido){
        console.log("Você já leu esse livro!");

    }else{
    console.log("Você ainda não leu esse livro!")
    }
});