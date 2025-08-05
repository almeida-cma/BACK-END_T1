from flask import Flask, render_template

# Cria a aplicação Flask
app = Flask(__name__)

# Define a rota para a página inicial ("/")
@app.route("/")
def home():
    # A variável 'mensagem' será enviada para o HTML
    mensagem_ola = "Olá, Mundo, vindo do Python!"
    return render_template("index.html", mensagem=mensagem_ola)

# Linha para permitir rodar o script diretamente
if __name__ == "__main__":
    app.run(debug=True)