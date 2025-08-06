/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clase.pkg1;

import java.util.Scanner;

/**
 *
 * @author Scrappy Doo Coco
 */
public class Clase1 {

    /**
     * @param args the command line arguments
     */
    private static String nombre;
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc = new Scanner(System.in);
        System.out.print("Ingresar un nombre: ");
        nombre=sc.nextLine();
        System.out.println("Hola "+nombre);
    }
    
}
