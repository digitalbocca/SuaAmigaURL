# SuaAmigaURL

Atenção use somente para estudo pois ela tem muitos erros

Implementação simples de uma URL Amigável em PHP que utiliza o arquivo .htaccess e um banco de dados.

### Um grande erro

Um grande erro que cometi nesse projeto é o fato de pensar na barra do final do slug. No banco de dados o sistema gravaria a url amigável sem barra no final, mas na hora do usuário digitar o endereço ele poderia acrescentar uma barra no final.

Fiz uma classe para remover essa barra, mas ai começou outro problema: essa classe também verificava se existia a barra (Duas responsabilidades). Outro problema que encontrei foi o fato de ter que expor mais um método publico na classe URLAmigavel, o método atualizarValor().

Tudo em vão, pois o nosso htaccess aceita somente letras a-z A-Z, numeros 0-9 e hifen "-". A barra apesar de estar marcada como opcional não é passada no parâmetro para a index.
