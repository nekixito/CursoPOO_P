class Main{
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ123",new Account("Andrés Herrera","INE"), "Chrevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();


        //Car car2 = new Car("QWE567",new Account("Andrea Herrera","INE"));
        //car2.printDataCar();
        
    }
}