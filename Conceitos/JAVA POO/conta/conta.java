package conta;
public class conta{ 
        public int numConta;
        protected String tipo;
        private String dono;
        private float saldo;
        private boolean status;
        public void abrirConta() {
            this.setStatus(true);
        }
        public void fecharConta() {
            this.setStatus(false);
        }
        public void depositar(float depValue) {
            if (this.status){
                this.setSaldo(this.getSaldo() + depValue);   
            } else { System.out.println("quer depositar com a conta fechada? hihi");
                }
        }
        public void sacar(float sacValue) {
            this.setSaldo(this.getSaldo() - sacValue);
        }
        public void mensalidade() {
            this.setSaldo(this.getSaldo() - 12);
        }
        //constructor
        public conta () {
            this.status = true;
            switch (this.tipo) {
                case "CC":
                    this.saldo = 50;
                    break;
                case "CP":
                    this.saldo = 150;
                    break;
                    
            
                default:
                    break;
            }
            
        }
    
        public void setNumAccount (int n) {
            this.numConta = n;
        }
        public int getNumAccount (){
            return this.numConta;
        }
        public void setTipo(String x){
            switch (x) {
                case "CC":
                this.tipo = x; 
                    break;
                case "CP":
                this.tipo = x; 
                    break;
            
                default:
                System.out.println("insira um tipo válido");
                    break;
            }
        }
        public String getTipo() {
            return this.tipo;
        }
        public void setDono (String x) {
            this.dono = x;
        }
        public String getDono () {
            return this.dono;
        }
    
        public void setSaldo (float depValue) {
            this.saldo = depValue;
        }
        public float getSaldo () {
            return this.saldo;
        }
    
        public void setStatus (boolean x){
            this.status = x;
        }
        public String getStatus () {
            return this.status? "Conta aberta":"Conta fechada";
        }
    
    }   
    

