package com.bop.pos.presentation.dashboard

import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Button
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Modifier
import androidx.compose.ui.unit.dp

@Composable
fun DashboardScreen() {

    Column(
        modifier = Modifier.padding(24.dp),
        verticalArrangement = Arrangement.spacedBy(16.dp)
    ) {

        Text(
            text = "BOP POS",
            style = MaterialTheme.typography.headlineMedium
        )

        Button(onClick = {}) {
            Text("Nueva Venta")
        }

        Button(onClick = {}) {
            Text("Inventario")
        }

        Button(onClick = {}) {
            Text("Caja")
        }

        Button(onClick = {}) {
            Text("Reportes")
        }

        Button(onClick = {}) {
            Text("Configuración")
        }
    }
}