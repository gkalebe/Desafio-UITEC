import { Component } from '@angular/core';
import { Product } from './path-to-product/product.ts';

@Component({
  selector: 'app-product-edit',
  templateUrl: './product-edit.component.html',
  styleUrls: ['./product-edit.component.css']
})
export class ProductEditComponent {
  editedProduct: Product = {
    id: 0, 
    name: '',
    price: 0,
    stockQuantity: 0
  };

  updateProduct() {
      console.log('Produto atualizado:', this.editedProduct);
  }
}
