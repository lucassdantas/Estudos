package animais.aula12;

public abstract class Animal {
    protected float peso;
    protected int idade;
    protected int membros;
    public abstract void locomover();
    public abstract void emitirSom();
    public abstract void correr();

    public float getPeso(){
        return this.peso;
    }
    public void setPeso(float peso){
        this.peso = peso;
    }
    public int getIdade(){
        return this.idade;
    }
    public void setIdade(int idade){
        this.idade = idade;
    }
    public int getMembros(){
        return this.membros;
    }
    public void setMembros(int membros){
        this.membros = membros;
    }
}

