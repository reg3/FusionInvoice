<?php namespace FI\Storage\Interfaces;

interface QuoteItemAmountRepositoryInterface {
	
	public function find($id);

	public function findByQuoteId($quoteId);
	
	public function create($input);
	
	public function update($input, $id);
	
	public function delete($id);
	
}