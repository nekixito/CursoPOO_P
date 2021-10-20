class UberX extends Car {

    String brand;
    String model;

    public UberX(String license, Account driver, String brand, String model) {
        super(license, driver);
        this.brand = brand;
        this.model = model;

    }

    @Override
    void printDataCar(){
        super.printDataCar();
        System.out.println("Model: " + model);
        System.out.println("Brand: " + brand);
    }
    
}
