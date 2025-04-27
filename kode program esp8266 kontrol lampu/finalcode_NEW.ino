#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>

// Ganti dengan kredensial Wi-Fi Anda
const char* ssid = "Ocx";
const char* password = "15041988";

// Pin relay (sesuaikan dengan pin yang Anda gunakan)
const int relayPin = D1; // Pin untuk relay

// Membuat instance server web pada port 80
ESP8266WebServer server(80);

// Fungsi untuk menyalakan relay
void turnOnRelay() {
  digitalWrite(relayPin, LOW);  // Menyalakan relay (LOW untuk NO)
  server.send(200, "text/html", "<html><body><h1>Relay is ON</h1><a href='/'>Go Back</a></body></html>");
  Serial.println("Relay ON");
}

// Fungsi untuk mematikan relay
void turnOffRelay() {
  digitalWrite(relayPin, HIGH);  // Mematikan relay (HIGH untuk NO)
  server.send(200, "text/html", "<html><body><h1>Relay is OFF</h1><a href='/'>Go Back</a></body></html>");
  Serial.println("Relay OFF");
}

// Halaman utama dengan tombol ON/OFF
void handleRoot() {
  String html = "<html><body>";
  html += "<h1>ESP8266 Relay Control</h1>";
  html += "<button onclick=\"window.location.href='/on'\">Turn ON</button><br><br>";
  html += "<button onclick=\"window.location.href='/off'\">Turn OFF</button>";
  html += "</body></html>";
  server.send(200, "text/html", html);
}

void setup() {
  // Memulai serial monitor
  Serial.begin(115200);
  
  // Menghubungkan ke Wi-Fi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
  Serial.print("IP Address: ");
  Serial.println(WiFi.localIP());  // Menampilkan IP ESP8266

  // Menyiapkan pin relay sebagai output
  pinMode(relayPin, OUTPUT);
  digitalWrite(relayPin, HIGH);  // Mulai dengan relay OFF (HIGH untuk NO)

  // Menyiapkan routing untuk halaman web
  server.on("/", HTTP_GET, handleRoot);  // Halaman utama dengan tombol
  server.on("/on", HTTP_GET, turnOnRelay);  // Aksi menyalakan relay
  server.on("/off", HTTP_GET, turnOffRelay);  // Aksi mematikan relay

  // Menjalankan server
  server.begin();
  Serial.println("Server started");
}

void loop() {
  // Menangani permintaan HTTP
  server.handleClient();
}
