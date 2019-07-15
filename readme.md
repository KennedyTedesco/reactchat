# ReactChat

Um simples chat pelo terminal usando o componente [reactphp/socket](https://github.com/reactphp/socket)

Exemplo construído para o artigo: [Trabalhando com Sockets no ReactPHP](https://www.treinaweb.com.br/blog/trabalhando-com-sockets-no-reactphp)

**Artigos recomendados:**

- [Uma introdução a TCP, UDP e Sockets](https://www.treinaweb.com.br/blog/uma-introducao-a-tcp-udp-e-sockets/): Uma introdução (base teórica) para TCP, UDP e Sockets, principalmente para desenvolvedores que desejam programar com Sockets.
- [Programação de Sockets em PHP](https://www.treinaweb.com.br/blog/programacao-de-sockets-em-php/): Uma introdução à programação de sockets com o PHP. 

**Para usar:**

Primeiro, inicie o servidor:

```bash
$ php index.php
```

Conecte quantos clientes desejar:

```bash
$ telnet 127.0.0.1 7181
```

**Referências:**

- [ReactPHP](https://reactphp.org)
- [Build A Simple Chat With ReactPHP Socket: Server](https://sergeyzhuk.me/2017/06/22/reactphp-chat-server/)
