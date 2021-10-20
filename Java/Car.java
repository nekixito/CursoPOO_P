class Car {
    Integer id;
    String license;
    Account driver;
    private Integer passenger;
    
    public Car(String license,Account driver){
        this.license = license;
        this.driver = driver;
    }

    void printDataCar(){
        if(passenger != null){
            System.out.println("Car License: " + license);
            System.out.println("Name Driver: " + driver.name);
            System.out.println("Passengers: " + passenger);
        }
    }

    public Integer getPassenger(){
        return this.passenger;
    }

    public void setPassenger(Integer passenger){
        if(passenger == 4)
            this.passenger = passenger;
        else
            System.out.println("Necesitas asignar 4 pasajeros");
    }
}
