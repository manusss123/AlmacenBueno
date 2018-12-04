package proyectoprimeraevacceso;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

class ManejadorSAX extends DefaultHandler {

    int ultimoelement;
    String cadena_resultado = "";

    public ManejadorSAX() {
        ultimoelement = 0;
    }

    @Override
    public void startElement(String uri, String localName, String qName, Attributes atts) throws SAXException {
        if (qName.equals("Movil")) {
            cadena_resultado = cadena_resultado + "\n -Marca: " + atts.getValue(atts.getQName(0)) + "\n -Modelo:  "
                    + atts.getValue(atts.getQName(1)) + "\n -Fecha de salida:  "
                    + atts.getValue(atts.getQName(2)) + "\n";
            ultimoelement = 1;
        } else if (qName.equals("Procesador")) {
            ultimoelement = 2;
            cadena_resultado = cadena_resultado + "\n-Procesador: ";
        } else if (qName.equals("Memoria_Ram")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Memoria Ram: ";
        } else if (qName.equals("Memoria_interna")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Memoria interna: ";
        } else if (qName.equals("Bateria")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Bateria: ";
        } else if (qName.equals("Pantalla")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Pantalla: ";
        } else if (qName.equals("Resolucion_Pantalla")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Resolucion de la Pantalla: ";
        } else if (qName.equals("Camara")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Camara: ";
        } else if (qName.equals("Precio")) {
            ultimoelement = 3;
            cadena_resultado = cadena_resultado + "\n-Precio: ";
        }
    }
//Cuando en este ejemplo se detecta el final de un elemento <libro>,
//se pone un línea discontinua en la salida.

    @Override
    public void endElement(String uri, String localName, String qName) throws SAXException {
        if (qName.equals("Movil")) {
            System.out.println("He encontrado el final de un elemento.");
            cadena_resultado = cadena_resultado + "\n -------------------";
        }
    }
//Cuando se detecta una cadena de texto posterior a uno de los elementos
//<titulo> o <autor> entonces guarda ese texto en la variable correspondiente.

    @Override
    public void characters(char[] ch, int start, int length) throws SAXException {
        if (ultimoelement == 2) {
            for (int i = start; i < length + start; i++) {
                cadena_resultado = cadena_resultado + ch[i];
            }
        } else if (ultimoelement == 3) {
            for (int i = start; i < length + start; i++) {
                cadena_resultado = cadena_resultado + ch[i];
            }
        }
    }
}
